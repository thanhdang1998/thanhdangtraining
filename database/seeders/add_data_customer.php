<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tabcustomer;

class add_data_customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tabcustomer::factory()->times(10)->create();
    }
}
