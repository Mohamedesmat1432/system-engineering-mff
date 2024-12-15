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
            $shop->installments[0]['amount'],
            Helper::formatDate($shop->installments[0]['date']),
            $shop->installments[1]['amount'],
            Helper::formatDate($shop->installments[1]['date']),
            $shop->installments[2]['amount'],
            Helper::formatDate($shop->installments[2]['date']),
            $shop->installments[3]['amount'],
            Helper::formatDate($shop->installments[3]['date']),
            $shop->installments[4]['amount'],
            Helper::formatDate($shop->installments[4]['date']),
            $shop->installments[5]['amount'],
            Helper::formatDate($shop->installments[5]['date']),
            $shop->installments[6]['amount'],
            Helper::formatDate($shop->installments[6]['date']),
            $shop->installments[7]['amount'],
            Helper::formatDate($shop->installments[7]['date']),
            $shop->installments[8]['amount'],
            Helper::formatDate($shop->installments[8]['date']),
            $shop->installments[9]['amount'],
            Helper::formatDate($shop->installments[9]['date']),
            $shop->installments[10]['amount'],
            Helper::formatDate($shop->installments[10]['date']),
            $shop->installments[11]['amount'],
            Helper::formatDate($shop->installments[11]['date']),
            $shop->installments[12]['amount'],
            Helper::formatDate($shop->installments[12]['date']),
            $shop->installments[13]['amount'],
            Helper::formatDate($shop->installments[13]['date']),
            $shop->installments[14]['amount'],
            Helper::formatDate($shop->installments[14]['date']),
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
            __('site.installment.0.amount'),
            __('site.installment.0.date'),
            __('site.installment.1.amount'),
            __('site.installment.1.date'),
            __('site.installment.2.amount'),
            __('site.installment.2.date'),
            __('site.installment.3.amount'),
            __('site.installment.3.date'),
            __('site.installment.4.amount'),
            __('site.installment.4.date'),
            __('site.installment.5.amount'),
            __('site.installment.5.date'),
            __('site.installment.6.amount'),
            __('site.installment.6.date'),
            __('site.installment.7.amount'),
            __('site.installment.7.date'),
            __('site.installment.8.amount'),
            __('site.installment.8.date'),
            __('site.installment.9.amount'),
            __('site.installment.9.date'),
            __('site.installment.10.amount'),
            __('site.installment.10.date'),
            __('site.installment.11.amount'),
            __('site.installment.11.date'),
            __('site.installment.12.amount'),
            __('site.installment.12.date'),
            __('site.installment.13.amount'),
            __('site.installment.13.date'),
            __('site.installment.14.amount'),
            __('site.installment.14.date'),
        ];
    }
}
