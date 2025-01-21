<?php

namespace App\Imports;

use App\Models\City;
use App\Models\Shop;
use App\Models\Government;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class ShopsImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows, SkipsOnFailure
{
    use Importable, SkipsFailures;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public $skippedRows = [];

    public function model(array $row)
    {
        return Shop::firstOrCreate([
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
            'sell_price'  => $row['sell_price'],
            'sell_price_for_meter'  => $row['sell_price_for_meter'],
        ]);
    }

    public function rules(): array
    {
        return [
            'auction_date' => 'required|date',
            'government_id' => 'required',
            'city_id' => 'required',
            'center' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'shop_area' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'sell_price_for_meter' => 'required|numeric',
        ];
    }

    public function onFailure(...$failures)
    {
        foreach ($failures as $failure) {
            $this->skippedRows[] =  [
                'row' => $failure->row(), // Row number
                // 'attribute' => $failure->attribute(), // Column name
                'errors' => array_map('utf8_decode', $failure->errors()), // Validation errors
            ];
        }
    }
}
