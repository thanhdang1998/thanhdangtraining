<?php

namespace App\Imports;

use App\Models\tabcustomer;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;

class CustomerImport implements ToModel, WithValidation,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function rules(): array
    {
        return [
            'Customer_Name' => 'required',
            'Email' => 'required'
        ];
    }

    public function customValidationMessages()
    {
        return [
            'Customer_Name.required' => 'Tên không được để trống.',
            'Email.required' => 'Email không được để trống.',
        ];
        
    }

    public function model(array $row)
    {
        return new tabcustomer([
            'customer_name'     => $row['Customer_Name'],
            'email'    => $row['Email'], 
            'tel_num'    => $row['Tel'], 
            'address'    => $row['Address'], 
            'is_active'    => 1, 
        ]);
    }


    /* public function model(array $row)
    {
        $validate = Validator::make($row->toArray(), [
            '*.0' => 'required',
        ])->validate();

        return new tabcustomer([
            'customer_name'     => $row['Customer Name'],
            'email'    => $row['Email'], 
            'tel_num'    => $row['Tel'], 
            'address'    => $row['Address'], 
            'is_active'    => 1, 
        ]);
    } */

    /* public function rules(): array
    {
        return [
            'email' => Rule::in(['patrick@maatwebsite.nl']),

             // Above is alias for as it always validates in batches
             '*.email' => Rule::in(['patrick@maatwebsite.nl']),
        ];
    } */

    /* public function model(array $row)
    {
        $validate = Validator::make($row->toArray(), [
            '*.0' => 'required',
        ])->validate();

        return new tabcustomer([
            'customer_name'     => $row[0],
            'email'    => $row[1], 
            'tel_num'    => $row[2], 
            'address'    => $row[3], 
            'is_active'    => 1, 
        ]);
    } */

    /* public function collection(Collection $rows)
    {
        //dd($import->failures()); 
        $validate = Validator::make($rows->toArray(), 
            [
                '0' => 'required',//*.
                '.1' => 'required',
                '.2' => 'required',
                '.3' => 'required',
            ],
         )->validate();
        
        foreach ($rows as $row) {
            tabcustomer::create([
                'customer_name'     => $row[0],
                'email'    => $row[1], 
                'tel_num'    => $row[2], 
                'address'    => $row[3], 
                'is_active'    => 1, 
            ]);
        }
    } */
}
