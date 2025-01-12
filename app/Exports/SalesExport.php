<?php

namespace App\Exports;

use App\Models\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Helpers\Helper;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SalesExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
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
        $sheet->getStyle('A1:BF' . Sale::count() + 1)->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:BF1')->getFont()->setBold(true);
        return;
    }

    public function collection()
    {
        return Sale::search($this->search)->get();
    }

    public function map($sale): array
    {
        return [
            $sale->id,
            Helper::formatDate($sale->auction_date),
            $sale->customer->customer_name,
            $sale->customer->national_number,
            $sale->customer->count_national_number,
            $sale->customer->phone_number,
            $sale->customer->home_number,
            $sale->shop->government->name,
            $sale->shop->city->name,
            $sale->shop->center,
            $sale->shop->location,
            $sale->shop->building_number,
            $sale->shop->building_entrance_number,
            $sale->shop->shop_number,
            $sale->shop->type_of_shop,
            $sale->shop->shop_area,
            $sale->shop->sell_price,
            $sale->shop->sell_price_for_meter,
            $sale->payment_method,
            $sale->insurance_amount,
            Helper::formatDate($sale->insurance_date),
            $sale->remaining_sale_amount,
            Helper::formatDate($sale->remaining_sale_date),
            $sale->maintenance_deposit_amount,
            Helper::formatDate($sale->maintenance_deposit_date),
            $sale->afine_amount,
            Helper::formatDate($sale->afine_date),
            $sale->installment_amount_1,
            Helper::formatDate($sale->installment_date_1),
            $sale->installment_amount_2,
            Helper::formatDate($sale->installment_date_2),
            $sale->installment_amount_3,
            Helper::formatDate($sale->installment_date_3),
            $sale->installment_amount_4,
            Helper::formatDate($sale->installment_date_4),
            $sale->installment_amount_5,
            Helper::formatDate($sale->installment_date_5),
            $sale->installment_amount_6,
            Helper::formatDate($sale->installment_date_6),
            $sale->installment_amount_7,
            Helper::formatDate($sale->installment_date_7),
            $sale->installment_amount_8,
            Helper::formatDate($sale->installment_date_8),
            $sale->installment_amount_9,
            Helper::formatDate($sale->installment_date_9),
            $sale->installment_amount_10,
            Helper::formatDate($sale->installment_date_10),
            $sale->installment_amount_11,
            Helper::formatDate($sale->installment_date_11),
            $sale->installment_amount_12,
            Helper::formatDate($sale->installment_date_12),
            $sale->installment_amount_13,
            Helper::formatDate($sale->installment_date_13),
            $sale->installment_amount_14,
            Helper::formatDate($sale->installment_date_14),
            $sale->installment_amount_15,
            Helper::formatDate($sale->installment_date_15),
        ];
    }

    public function headings(): array
    {
        if ($this->originalCoulmns) {
            return [
                __('site.id'),
                __('site.auction_date'),
                __('site.customer_name'),
                __('site.national_number'),
                __('site.count_national_number'),
                __('site.phone_number'),
                __('site.home_number'),
                __('site.government_id'),
                __('site.city_id'),
                __('site.center'),
                __('site.location'),
                __('site.building_number'),
                __('site.building_entrance_number'),
                __('site.shop_number'),
                __('site.type_of_shop'),
                __('site.shop_area'),
                __('site.sell_price'),
                __('site.sell_price_for_meter'),
                __('site.payment_method'),
                __('site.insurance_amount'),
                __('site.insurance_date'),
                __('site.remaining_amount_sale_amount'),
                __('site.remaining_amount_sale_date'),
                __('site.maintenance_deposit_amount'),
                __('site.maintenance_deposit_date'),
                __('site.afine_amount'),
                __('site.afine_date'),
                __('site.installment_amount_1'),
                __('site.installment_date_1'),
                __('site.installment_amount_2'),
                __('site.installment_date_2'),
                __('site.installment_amount_3'),
                __('site.installment_date_3'),
                __('site.installment_amount_4'),
                __('site.installment_date_4'),
                __('site.installment_amount_5'),
                __('site.installment_date_5'),
                __('site.installment_amount_6'),
                __('site.installment_date_6'),
                __('site.installment_amount_7'),
                __('site.installment_date_7'),
                __('site.installment_amount_8'),
                __('site.installment_date_8'),
                __('site.installment_amount_9'),
                __('site.installment_date_9'),
                __('site.installment_amount_10'),
                __('site.installment_date_10'),
                __('site.installment_amount_11'),
                __('site.installment_date_11'),
                __('site.installment_amount_12'),
                __('site.installment_date_12'),
                __('site.installment_amount_13'),
                __('site.installment_date_13'),
                __('site.installment_amount_14'),
                __('site.installment_date_14'),
                __('site.installment_amount_15'),
                __('site.installment_date_15'),
            ];
        } else {
            return [
                'id',
                'auction_date',
                'customer_name',
                'national_number',
                'count_national_number',
                'phone_number',
                'home_number',
                'government_id',
                'city_id',
                'center',
                'location',
                'building_number',
                'building_entrance_number',
                'shop_number',
                'type_of_shop',
                'shop_area',
                'sell_price',
                'sell_price_for_meter',
                'payment_method',
                'insurance_amount',
                'insurance_date',
                'remaining_sale_amount',
                'remaining_sale_date',
                'maintenance_deposit_amount',
                'maintenance_deposit_date',
                'afine_amount',
                'afine_date',
                'installment_amount_1',
                'installment_date_1',
                'installment_amount_2',
                'installment_date_2',
                'installment_amount_3',
                'installment_date_3',
                'installment_amount_4',
                'installment_date_4',
                'installment_amount_5',
                'installment_date_5',
                'installment_amount_6',
                'installment_date_6',
                'installment_amount_7',
                'installment_date_7',
                'installment_amount_8',
                'installment_date_8',
                'installment_amount_9',
                'installment_date_9',
                'installment_amount_10',
                'installment_date_10',
                'installment_amount_11',
                'installment_date_11',
                'installment_amount_12',
                'installment_date_12',
                'installment_amount_13',
                'installment_date_13',
                'installment_amount_14',
                'installment_date_14',
                'installment_amount_15',
                'installment_date_15',
            ];
        }
    }
}
