<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class CustomersImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows, SkipsOnFailure
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
        return Customer::firstOrCreate([
            'customer_name' => $row['customer_name'],
            'national_number' => $row['national_number'],
            'count_national_number' => $row['count_national_number'],
            'phone_number'  => $row['phone_number'],
            'home_number'  => $row['home_number'],
        ]);
    }

    public function rules(): array
    {
        return [
            'customer_name' => 'required|string|max:255',
            'national_number' => [
                'required',
                Rule::unique('customers', 'national_number') // Ensure national_number is unique in the customers table
            ],
            'count_national_number' => 'nullable|numeric',
            'phone_number' => 'nullable|string|min:11|max:11',
            'home_number' => 'nullable|string|min:10|max:11',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'customer_name.required' => 'The customer name is required.', // Other messages as needed
            'national_number.unique' => 'The national number is already used.', // Custom message for duplicates
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
