<?php

namespace App\Imports;

use App\Models\ShopSale;
use Maatwebsite\Excel\Concerns\ToModel;

class ShopSalesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ShopSale([
            //
        ]);
    }
}
