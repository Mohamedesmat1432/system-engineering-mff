<?php

namespace App\Exports;

use App\Models\ShopModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ShopModelsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ShopModel::all();
    }
}
