<?php

namespace App\Exports;

use App\Enums\UserRoleType;
use App\Models\KPIActivity;
use App\Models\Pipeline;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Events\AfterSheet;

class SalePipelineActivityExport implements
    ShouldAutoSize,
    WithEvents
{

    private $from_date;
    private $to_date;
    private array $alphabet;
    private UserRoleType $role;
    private $pipelines;
    private $activities;

    public function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->alphabet = range("A", "Z");
        $this->role = UserRoleType::fromValue(auth()->user()->role->name);
        $this->pipelines = Pipeline::all();
        $this->activities = KPIActivity::all();
    }

    private function sales(): Collection
    {
        if ($this->role->is(UserRoleType::HeadSale) || $this->role->is(UserRoleType::SaleAdmin)) {
            return User::sales();
        } else if ($this->role->is(UserRoleType::DSM)) {
            return Auth::user()
                ->sales()
                ->only_sales_from_dsm();
        } else if ($this->role->is(UserRoleType::Sale)) {
            return User::all()
                ->where("id", "=", \auth()->user()->id);
        }
    }

    public function title(): string
    {
        return "Sale Report";
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $this->drawHeader(
                    $event,
                    $this->pipelines->count(),
                    $this->activities->count()
                );

                $this->setUpPipelineTotal(
                    $event,
                    $this->sales()->count(),
                    $this->pipelines->count()
                );

                $this->setUpActivityTotal(
                    $event,
                    $this->sales()->count(),
                    $this->pipelines->count() + $this->activities->count()
                );
            }
        ];
    }

    private function drawHeader(
        AfterSheet $event,
        int $pipelines,
        int $activities
    ) {
        $range = $this->alphabet[$pipelines + $activities] . "1";
        $sheets = $event
            ->sheet
            ->getStyle("B1:$range");

        // Set row height
        $event
            ->sheet
            ->getRowDimension("1")
            ->setRowHeight(20);

        $event
            ->sheet
            ->getRowDimension("2")
            ->setRowHeight(20);

        // Set font
        $sheets
            ->getFont()
            ->setSize(13)
            ->getColor()
            ->setARGB("FFFFFF");

        $sheets
            ->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()
            ->setARGB("FF0000");

        $sheets
            ->getAlignment()
            ->setVertical(Alignment::HORIZONTAL_CENTER);
    }

    private function setUpPipelineTotal(
        AfterSheet $event,
        int $users,
        int $pipelines
    ) {
        for ($i = 0; $i < $pipelines; $i++) {
            $string = $this->alphabet[$i + 1];
            $start = $string . "3";
            $display_area = $users + 3;
            $target = $users + 2;
            $event
                ->sheet
                ->setCellValue(
                    $string . "$display_area",
                    "=SUM($start:$string$target)"
                );
        }
    }

    private function setUpActivityTotal(
        AfterSheet $event,
        int $users,
        int $activities
    ) {
        for ($i = 0; $i < $activities; $i++) {
            $string = $this->alphabet[$i + 1];
            $start = $string . "3";
            $display_area = $users + 3;
            $target = $users + 2;
            $event
                ->sheet
                ->setCellValue(
                    $string . "$display_area",
                    "=SUM($start:$string$target)"
                );
        }
    }
}
