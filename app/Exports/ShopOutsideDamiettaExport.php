<?php

namespace App\Exports;

use App\Models\DataShopOutsideDamietta;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Helpers\Helper;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ShopOutsideDamiettaExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
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
        $sheet->getStyle('A1:Z' . DataShopOutsideDamietta::count() + 1)->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:Z1')->getFont()->setBold(true);
        return;
    }

    public function collection()
    {
        return DataShopOutsideDamietta::search($this->search)->get();
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
            $shop->afine_amount,
            Helper::formatDate($shop->afine_date),
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
                __('site.insurance_amount'),
                __('site.insurance_date'),
                __('site.remaining_amount_sale_amount'),
                __('site.remaining_amount_sale_date'),
                __('site.maintenance_deposit_amount'),
                __('site.maintenance_deposit_date'),
                __('site.afine_amount'),
                __('site.afine_date'),
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
                'afine_amount',
                'afine_date',
            ];
        }
    }
}
