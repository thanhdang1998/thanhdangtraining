<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tabproduct;

class add_data_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tabproduct::factory()->times(10)->create();
    }
}
