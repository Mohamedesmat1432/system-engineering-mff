<?php

namespace App\Imports;

use App\Models\Installment;
use Maatwebsite\Excel\Concerns\ToModel;

class InstallmentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Installment([
            //
        ]);
    }
}
