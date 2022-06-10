<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\Exportable;

class SalesExport implements WithMultipleSheets
{
    use Exportable;

    private $from_date;
    private $to_date;

    public function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function sheets(): array
    {
        $sheets = [
            new DailyPipelinesActivityExport(
                $this->from_date,
                $this->to_date
            ),
            new SalePipelineActivityExport(
                $this->from_date,
                $this->to_date
            ),
        ];
        return $sheets;
    }
}
