<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tabuser;

class add_data_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tabuser::factory()->times(30)->create();
    }
}
