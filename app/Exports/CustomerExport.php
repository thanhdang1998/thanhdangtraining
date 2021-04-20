<?php

namespace App\Exports;

use App\Models\tabcustomer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    *@return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tabcustomer::all();
    }

    public function headings(): array
    {
        return [
            'Customer Name',
            'Email',
            'Tel',
            'Address',
        ];
    }

    public function map($customer): array
    {
        return [
            $customer->customer_name,
            $customer->email,
            $customer->tel_num,
            $customer->address,
        ];
    }
}
