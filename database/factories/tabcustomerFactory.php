<?php

namespace Database\Factories;

use App\Models\tabcustomer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class tabcustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tabcustomer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'tel_num' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'is_active' => '1',
        ];
    }
}
