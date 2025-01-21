<?php

namespace App\Exports;

use App\Models\Shop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ShopsExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
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
        $sheet->getStyle('A1:BF' . Shop::count() + 1)->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1:BF1')->getFont()->setBold(true);
        return;
    }

    public function collection()
    {
        return Shop::search($this->search)->get();
    }

    public function map($shop): array
    {
        return [
            $shop->id,
            $shop->auction_date,
            $shop->government->name,
            $shop->city->name,
            $shop->center,
            $shop->location,
            $shop->building_number,
            $shop->building_entrance_number,
            $shop->shop_number,
            $shop->type_of_shop,
            $shop->shop_area,
            $shop->sell_price,
            $shop->sell_price_for_meter,
        ];
    }

    public function headings(): array
    {
        if ($this->originalCoulmns) {
            return [
                __('site.id'),
                __('site.auction_date'),
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
            ];
        } else {
            return [
                'id',
                'auction_date',
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
            ];
        }
    }
}
