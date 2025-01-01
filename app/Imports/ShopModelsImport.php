<?php

namespace App\Imports;

use App\Models\ShopModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ShopModelsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ShopModel([
            //
        ]);
    }
}
