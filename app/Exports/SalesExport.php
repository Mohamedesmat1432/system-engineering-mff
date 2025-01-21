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
        // Prepare installments
        $installments = $sale->installments->map(function ($installment) {
            return [
                'amount' => $installment->amount,
                'date' => $installment->date,
                'status' => $installment->status,
            ];
        });

        // Flatten installments into a single array
        $installmentColumns = [];
        foreach ($installments as $installment) {
            $installmentColumns[] = $installment['amount'];
            $installmentColumns[] = $installment['date'];
            $installmentColumns[] = $installment['status'];
        }

        return array_merge([
            $sale->id,
            $sale->customer->customer_name,
            $sale->customer->national_number,
            $sale->customer->count_national_number,
            $sale->customer->phone_number,
            $sale->customer->home_number,
            Helper::formatDate($sale->shop->auction_date),
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
            $sale->insurance->amount,
            Helper::formatDate($sale->insurance->date),
            $sale->remainingSale->amount,
            Helper::formatDate($sale->remainingSale->date),
            $sale->maintenanceDeposit->amount,
            Helper::formatDate($sale->maintenanceDeposit->date),
        ], $installmentColumns);
    }

    public function headings(): array
    {
        $headings = [];

        if ($this->originalCoulmns) {
            $headings = [
                __('site.id'),
                __('site.customer_name'),
                __('site.national_number'),
                __('site.count_national_number'),
                __('site.phone_number'),
                __('site.home_number'),
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

            for ($i = 1; $i <= 15; $i++) {
                $headings[] = __("site.installment_amount_{$i}");
                $headings[] = __("site.installment_date_{$i}");
                $headings[] = __("site.installment_status_{$i}");
            }
        } else {
            $headings =  [
                'id',
                'customer_name',
                'national_number',
                'count_national_number',
                'phone_number',
                'home_number',
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

            for ($i = 1; $i <= 15; $i++) {
                $headings[] = "installment_amount_{$i}";
                $headings[] = "installment_date_{$i}";
                $headings[] = "installment_status_{$i}";
            }
        }

        return $headings;
    }
}
