<?php

namespace App\Imports;

use App\Models\City;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Government;
use App\Models\Shop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SalesImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public $skippedRows = [];

    public function model(array $row)
    {
        $customer = Customer::firstOrCreate([
            'customer_name' => $row['customer_name'],
            'national_number' => $row['national_number'],
            'count_national_number' => $row['count_national_number'],
            'phone_number'  => $row['phone_number'],
            'home_number'  => $row['home_number'],
        ]);

        $shop = Shop::firstOrCreate([
            'auction_date' => $row['auction_date'],
            'government_id' => Government::where('name_ar', $row['government_id'])->orWhere('name_en', $row['government_id'])->first()?->id,
            'city_id'  => City::where('name_ar', $row['city_id'])->orWhere('name_en', $row['city_id'])->first()?->id,
            'center' => $row['center'],
            'location' => $row['location'],
            'building_number' => $row['building_number'],
            'building_entrance_number' => $row['building_entrance_number'],
            'shop_number' => $row['shop_number'],
            'type_of_shop' => $row['type_of_shop'],
            'shop_area' => $row['shop_area'],
            'sell_price'  => $row['sell_price'],
            'sell_price_for_meter'  => $row['sell_price_for_meter'],
        ]);

        $saleShopIds = Sale::pluck('shop_id')->toArray();

        if (in_array($shop->id, $saleShopIds)) {
            // throw new \Exception("Something went wrong");
            $this->skippedRows[] = "Row skipped:{$row['id']}";
            return null;  // Skips the row
        }

        $sale =  Sale::firstOrCreate([
            'customer_id' => $customer->id,
            'shop_id' => $shop->id,
            'payment_method'  => $row['payment_method'],
            // 'installment_count'  => $row['installment_count'],
        ]);

        $sale->insurance()->firstOrCreate([
            'amount' => $row['insurance_amount'],
            'date' => $row['insurance_date'],
            'status' => 0,
        ]);

        $sale->remainingSale()->firstOrCreate([
            'amount' => $row['remaining_sale_amount'],
            'date' => $row['remaining_sale_date'],
            'status' => 0,
        ]);

        $sale->maintenanceDeposit()->firstOrCreate([
            'amount' => $row['maintenance_deposit_amount'],
            'date' => $row['maintenance_deposit_date'],
            'status' => 0,
        ]);

        if ($sale->payment_method === 'installment') {
            for ($i = 1; $i <= 15; $i++) {
                $amountKey = "installment_amount_{$i}";
                $dateKey = "installment_date_{$i}";

                if (!empty($row[$amountKey]) && !empty($row[$dateKey])) {
                    $sale->installments()->firstOrCreate([
                        'amount' => $row[$amountKey],
                        'date' => $row[$dateKey],
                        'status' => 0,
                    ]);
                }
            }
        }
    }

    public function rules(): array
    {
        $rules = [
            'customer_name' => 'required|string|max:255',
            'national_number' => 'required',
            'count_national_number' => 'nullable|numeric',
            'phone_number' => 'required|string|min:11|max:11',
            'home_number' => 'nullable|string|min:10|max:11',
            'sell_price' => 'required|numeric',
            'government_id' => 'required',
            'city_id' => 'required',
            'center' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'shop_area' => 'required|numeric',
            'sell_price_for_meter' => 'required|numeric',
            'auction_date' => 'required|date',
            'payment_method' => 'nullable|string',
            'insurance_amount' => 'nullable|numeric',
            'insurance_date' => 'nullable|date',
            'remaining_sale_amount' => 'nullable|numeric',
            'remaining_sale_date' => 'nullable|date',
            'maintenance_deposit_amount' => 'nullable|numeric',
            'maintenance_deposit_date' => 'nullable|date',
        ];

        for ($i = 1; $i <= 15; $i++) {
            $rules["installment_amount_{$i}"] = 'nullable|numeric';
            $rules["installment_date_{$i}"] = 'nullable|date';
            // $rules["installment_status_{$i}"] = 'nullable|date';
        }

        return $rules;
    }
}
