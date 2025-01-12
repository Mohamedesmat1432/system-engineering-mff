<?php

namespace App\Imports;

use App\Models\City;
use App\Models\DataShopOutsideDamietta;
use App\Models\Government;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ShopOutsideDamiettaImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DataShopOutsideDamietta([
            'auction_date' => $row['auction_date'],
            'government_id' => Government::where('name_ar',$row['government_id'])->orWhere('name_en',$row['government_id'])->first()?->id,
            'city_id'  => City::where('name_ar',$row['city_id'])->orWhere('name_en',$row['city_id'])->first()?->id,
            'center' => $row['center'],
            'location' => $row['location'],
            'building_number' => $row['building_number'],
            'building_entrance_number' => $row['building_entrance_number'],
            'shop_number' => $row['shop_number'],
            'type_of_shop' => $row['type_of_shop'],
            'shop_area' => $row['shop_area'],
            'buyer_name' => $row['buyer_name'],
            'national_number' => $row['national_number'],
            'count_of_national_number' => $row['count_of_national_number'],
            'phone_number'  => $row['phone_number'],
            'home_number'  => $row['home_number'],
            'sell_price'  => $row['sell_price'],
            'sell_price_for_meter'  => $row['sell_price_for_meter'],
            'payment_method'  => $row['payment_method'],
            'insurance_amount' => $row['insurance_amount'],
            'insurance_date' => $row['insurance_date'],
            'remaining_sale_amount' => $row['remaining_sale_amount'],
            'remaining_sale_date' => $row['remaining_sale_date'],
            'maintenance_deposit_amount' => $row['maintenance_deposit_amount'],
            'maintenance_deposit_date' => $row['maintenance_deposit_date'],
            'afine_amount' => $row['afine_amount'],
            'afine_date' => $row['afine_date'],
        ]);
    }

    public function rules(): array
    {
        return [
            'auction_date' => 'required|Date',
            // 'government_id' => 'required|string|exists:governments,id',
            // 'city_id' => 'required|string|exists:cities,id',
            'center' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'shop_area' => 'required|numeric',
            'buyer_name' => 'required|string|max:255',
            'national_number' => 'required',
            'count_of_national_number' => 'nullable|numeric',
            'phone_number' => 'required|string|min:11|max:15',
            'home_number' => 'nullable|string|min:7|max:10',
            'sell_price' => 'required|numeric',
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
        ];
    }
}
