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
            $shop->auction_date,
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
            $shop->insurance['amount'],
            Helper::formatDate($shop->insurance['date']),
            $shop->remaining_sale['amount'],
            Helper::formatDate($shop->remaining_sale['date']),
            $shop->maintenance_deposit['amount'],
            Helper::formatDate($shop->maintenance_deposit['date']),
        ];
    }

    public function headings(): array
    {
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
        ];
    }
}
