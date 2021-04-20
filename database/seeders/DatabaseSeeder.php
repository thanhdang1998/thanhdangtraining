<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(add_data_user::class);
        $this->call(add_data_customer::class);
        $this->call(add_data_product::class);
    }
}
