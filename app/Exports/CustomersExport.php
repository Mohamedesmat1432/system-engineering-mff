<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CustomersExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */

    protected $search = '';
    protected $originalCoulmns = false;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:BF' . Customer::count() + 1)->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:BF1')->getFont()->setBold(true);
        return;
    }

    public function collection()
    {
        return Customer::search($this->search)->get();
    }

    public function map($customer): array
    {
        return [
            $customer->id,
            $customer->customer_name,
            $customer->national_number,
            $customer->count_national_number,
            $customer->phone_number,
            $customer->home_number,
        ];
    }

    public function headings(): array
    {
        if ($this->originalCoulmns) {
            return [
                __('site.id'),
                __('site.customer_name'),
                __('site.national_number'),
                __('site.count_national_number'),
                __('site.phone_number'),
                __('site.home_number'),
            ];
        } else {
            return [
                'id',
                'customer_name',
                'national_number',
                'count_national_number',
                'phone_number',
                'home_number',
            ];
        }
    }
}
