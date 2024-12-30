<?php

namespace App\Exports;

use App\Models\DataShopDamiettaOnly;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Helpers\Helper;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ShopDamiettaOnlyExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
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
        $sheet->getStyle('A1:Z' . DataShopDamiettaOnly::count() + 1)->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:Z1')->getFont()->setBold(true);
        return;
    }

    public function collection()
    {
        return DataShopDamiettaOnly::search($this->search)->get();
    }

    public function map($shop): array
    {
        return [
            $shop->id,
            $shop->government_id,
            Helper::formatDate($shop->auction_date),
            $shop->city_id,
            $shop->center,
            $shop->location,
            $shop->building_number,
            $shop->building_entrance_number,
            $shop->shop_number,
            $shop->type_of_shop,
            $shop->shop_area,
            $shop->buyer_name,
            $shop->national_number,
            $shop->count_of_national_number,
            $shop->phone_number,
            $shop->home_number,
            $shop->sell_price,
            $shop->sell_price_for_meter,
            $shop->payment_method,
            $shop->insurance_amount,
            Helper::formatDate($shop->insurance_date),
            $shop->remaining_sale_amount,
            Helper::formatDate($shop->remaining_sale_date),
            $shop->maintenance_deposit_amount,
            Helper::formatDate($shop->maintenance_deposit_date),
            $shop->installment_amount_1,
            Helper::formatDate($shop->installment_date_1),
            $shop->installment_amount_2,
            Helper::formatDate($shop->installment_date_2),
            $shop->installment_amount_3,
            Helper::formatDate($shop->installment_date_3),
            $shop->installment_amount_4,
            Helper::formatDate($shop->installment_date_4),
            $shop->installment_amount_5,
            Helper::formatDate($shop->installment_date_5),
            $shop->installment_amount_6,
            Helper::formatDate($shop->installment_date_6),
            $shop->installment_amount_7,
            Helper::formatDate($shop->installment_date_7),
            $shop->installment_amount_8,
            Helper::formatDate($shop->installment_date_8),
            $shop->installment_amount_9,
            Helper::formatDate($shop->installment_date_9),
            $shop->installment_amount_10,
            Helper::formatDate($shop->installment_date_10),
            $shop->installment_amount_11,
            Helper::formatDate($shop->installment_date_11),
            $shop->installment_amount_12,
            Helper::formatDate($shop->installment_date_12),
            $shop->installment_amount_13,
            Helper::formatDate($shop->installment_date_13),
            $shop->installment_amount_14,
            Helper::formatDate($shop->installment_date_14),
            $shop->installment_amount_15,
            Helper::formatDate($shop->installment_date_15),
        ];
    }

    public function headings(): array
    {
        if ($this->originalCoulmns) {
            return [
                __('site.id'),
                __('site.government_id'),
                __('site.auction_date'),
                __('site.city_id'),
                __('site.center'),
                __('site.location'),
                __('site.building_number'),
                __('site.building_entrance_number'),
                __('site.shop_number'),
                __('site.type_of_shop'),
                __('site.shop_area'),
                __('site.buyer_name'),
                __('site.national_number'),
                __('site.count_of_national_number'),
                __('site.phone_number'),
                __('site.home_number'),
                __('site.sell_price'),
                __('site.sell_price_for_meter'),
                __('site.payment_method'),
                __('site.insurance_price'),
                __('site.insurance_date'),
                __('site.remaining_amount_sale_price'),
                __('site.remaining_amount_sale_date'),
                __('site.maintenance_deposit_price'),
                __('site.maintenance_deposit_date'),
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
                'government_id',
                'auction_date',
                'city_id',
                'center',
                'location',
                'building_number',
                'building_entrance_number',
                'shop_number',
                'type_of_shop',
                'shop_area',
                'buyer_name',
                'national_number',
                'count_of_national_number',
                'phone_number',
                'home_number',
                'sell_price',
                'sell_price_for_meter',
                'payment_method',
                'insurance_amount',
                'insurance_date',
                'remaining_sale_amount',
                'remaining_sale_date',
                'maintenance_deposit_amount',
                'maintenance_deposit_date',
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
