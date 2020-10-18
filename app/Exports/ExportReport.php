<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportReport implements FromView, WithEvents, ShouldAutoSize
{
    public function __construct(array $data, string $type)
    {
        $this->data = $data;
        $this->type = $type;
    }
    public function view(): View
    {
        return view('admin.reports.export.'.$this->type, [
            'data' => $this->data
        ]);


    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // ... HERE YOU CAN DO ANY FORMATTING
                $event->sheet->getDelegate()->getStyle('A1:ZZ1')->getFont()->setSize(16);
                $event->sheet->getDelegate()->getStyle('A2:ZZ2')->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle('A3:Z1000')->getFont()->setSize(12);
            },
        ];

    }
}
