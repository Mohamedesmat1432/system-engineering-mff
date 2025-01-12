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
            return null; // Skips the row
        }

        return new Sale([
            'customer_id' => $customer->id,
            'shop_id' => $shop->id,
            'auction_date' => $row['auction_date'],
            'payment_method'  => $row['payment_method'],
            'insurance_amount' => $row['insurance_amount'],
            'insurance_date' => $row['insurance_date'],
            'remaining_sale_amount' => $row['remaining_sale_amount'],
            'remaining_sale_date' => $row['remaining_sale_date'],
            'maintenance_deposit_amount' => $row['maintenance_deposit_amount'],
            'maintenance_deposit_date' => $row['maintenance_deposit_date'],
            'afine_amount' => $row['afine_amount'],
            'afine_date' => $row['afine_date'],
            'installment_amount_1' => $row['installment_amount_1'],
            'installment_date_1' => $row['installment_date_1'],
            'installment_amount_2' => $row['installment_amount_2'],
            'installment_date_2' => $row['installment_date_2'],
            'installment_amount_3' => $row['installment_amount_3'],
            'installment_date_3' => $row['installment_date_3'],
            'installment_amount_4' => $row['installment_amount_4'],
            'installment_date_4' => $row['installment_date_4'],
            'installment_amount_5' => $row['installment_amount_5'],
            'installment_date_5' => $row['installment_date_5'],
            'installment_amount_6' => $row['installment_amount_6'],
            'installment_date_6' => $row['installment_date_6'],
            'installment_amount_7' => $row['installment_amount_7'],
            'installment_date_7' => $row['installment_date_7'],
            'installment_amount_8' => $row['installment_amount_8'],
            'installment_date_8' => $row['installment_date_8'],
            'installment_amount_9' => $row['installment_amount_9'],
            'installment_date_9' => $row['installment_date_9'],
            'installment_amount_10' => $row['installment_amount_10'],
            'installment_date_10' => $row['installment_date_10'],
            'installment_amount_11' => $row['installment_amount_11'],
            'installment_date_11' => $row['installment_date_11'],
            'installment_amount_12' => $row['installment_amount_12'],
            'installment_date_12' => $row['installment_date_12'],
            'installment_amount_13' => $row['installment_amount_13'],
            'installment_date_13' => $row['installment_date_13'],
            'installment_amount_14' => $row['installment_amount_14'],
            'installment_date_14' => $row['installment_date_14'],
            'installment_amount_15' => $row['installment_amount_15'],
            'installment_date_15' => $row['installment_date_15'],
        ]);
    }

    public function rules(): array
    {
        return [
            'auction_date' => 'required|Date',
            'customer_name' => 'required|string|max:255',
            'national_number' => 'required|string|min:14|max:14|unique:customers,national_number',
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
            'payment_method' => 'nullable|string',
            'insurance_amount' => 'nullable|numeric',
            'insurance_date' => 'nullable|date',
            'remaining_sale_amount' => 'nullable|numeric',
            'remaining_sale_date' => 'nullable|date',
            'maintenance_deposit_amount' => 'nullable|numeric',
            'maintenance_deposit_date' => 'nullable|date',
            'afine_amount' => 'nullable|numeric',
            'afine_date' => 'nullable|date',
            'installment_amount_1' => 'nullable|numeric',
            'installment_date_1' => 'nullable|date',
            'installment_amount_2' => 'nullable|numeric',
            'installment_date_2' => 'nullable|date',
            'installment_amount_3' => 'nullable|numeric',
            'installment_date_3' => 'nullable|date',
            'installment_amount_4' => 'nullable|numeric',
            'installment_date_4' => 'nullable|date',
            'installment_amount_5' => 'nullable|numeric',
            'installment_date_5' => 'nullable|date',
            'installment_amount_6' => 'nullable|numeric',
            'installment_date_6' => 'nullable|date',
            'installment_amount_7' => 'nullable|numeric',
            'installment_date_7' => 'nullable|date',
            'installment_amount_8' => 'nullable|numeric',
            'installment_date_8' => 'nullable|date',
            'installment_amount_9' => 'nullable|numeric',
            'installment_date_9' => 'nullable|date',
            'installment_amount_10' => 'nullable|numeric',
            'installment_date_10' => 'nullable|date',
            'installment_amount_11' => 'nullable|numeric',
            'installment_date_11' => 'nullable|date',
            'installment_amount_12' => 'nullable|numeric',
            'installment_date_12' => 'nullable|date',
            'installment_amount_13' => 'nullable|numeric',
            'installment_date_13' => 'nullable|date',
            'installment_amount_14' => 'nullable|numeric',
            'installment_date_14' => 'nullable|date',
            'installment_amount_15' => 'nullable|numeric',
            'installment_date_15' => 'nullable|date',
        ];
    }
}
