<?php

namespace App\Exports;

use App\Models\ShopSale;
use Maatwebsite\Excel\Concerns\FromCollection;

class ShopSalesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ShopSale::all();
    }
}
