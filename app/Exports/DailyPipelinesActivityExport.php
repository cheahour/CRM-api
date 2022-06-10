<?php

namespace App\Exports;

use App\Enums\UserRoleType;
use App\Models\User;
use Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class DailyPipelinesActivityExport implements
    FromCollection,
    WithHeadings,
    WithEvents,
    ShouldAutoSize,
    WithTitle,
    WithMapping
{

    private $from_date;
    private $to_date;

    public function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function title(): string
    {
        return "Daily Pipeline Activities";
    }

    public function collection()
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $from_date = $this->from_date;
        $to_date = $this->to_date;
        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin)) {
            $collection = collect();
            $sales = User::sales();
            foreach ($sales as $sale) {
                $customers = $sale
                    ->customers
                    ->whereBetween(
                        "updated_at",
                        [$from_date, $to_date]
                    );
                $collection = $collection->merge($customers);
            }
            return $collection;
        } else if ($role->is(UserRoleType::DSM)) {
            $collection = collect();
            $sales = Auth::user()
                ->sales()
                ->only_sales_from_dsm();
            foreach ($sales as $sale) {
                $customers = $sale
                    ->customers
                    ->whereBetween(
                        "updated_at",
                        [$from_date, $to_date]
                    );
                $collection = $collection->merge($customers);
            }
            return $collection;
        } else if ($role->is(UserRoleType::Sale)) {
            return auth()
                ->user()
                ->customers
                ->between_date($from_date, $to_date);
        }
    }

    public function map($customer): array
    {
        $display_phone = str_replace("+855", "0", $customer->phone_number);
        $installation = "$ " . strval($customer->installation);
        $estimated_cash_collect = "$ " . strval($customer->installation);
        $monthly_fee = "$ " . strval($customer->installation);
        return [
            $customer->updated_at->format("Y-F-d") ?? "",
            $customer->user->name ?? "",
            $customer->name ?? "",
            $customer->industry->name ?? "",
            $customer->pipeline->name ?? "",
            $customer->kpi_activity->name ?? "",
            $customer->territory->name ?? "",
            $customer->contact_name ?? "",
            $display_phone ?? "",
            $customer->telegram ?? "",
            "",
            "",
            "",
            $customer->package->name ?? "",
            $customer->bandwidth ?? "",
            $customer->deposit ?? "",
            $installation ?? "",
            $customer->payment_term ?? "",
            $estimated_cash_collect ?? "",
            $monthly_fee ?? "",
            $customer->expected_closed_date ?? "",
            $customer->billing_date ?? "",
            $customer->next_follow_up_date ?? "",
            $customer->remark ?? "",
        ];
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            "Date",
            "Name",
            "Lead Name",
            "Industries",
            "Pipeline Status",
            "KPI Activities",
            "Territory",
            "Contact Person",
            "Contact Number",
            "Email/Telegram",
            "Existing Provider",
            "Existing Bandwidth",
            "Price",
            "Today Package Offer",
            "Bandwidth",
            "Deposit",
            "Installation",
            "Payment Terms",
            "Estimated Cash Collected(VAT)",
            "Monthly Fee(VAT)",
            "Expected Closed Date",
            "Billing Date",
            "Next Follow Up Date",
            "Remarks"
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheets = $event
                    ->sheet
                    ->getStyle("A1:Z1");

                // Set row height
                $event
                    ->sheet
                    ->getRowDimension("1")
                    ->setRowHeight(50);

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
        ];
    }
}
