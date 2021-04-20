<?php

namespace Database\Factories;

use App\Models\tabproduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class tabproductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tabproduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Str::random(10),
            'product_name' => $this->faker->unique()->word,
            'product_price' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'description' => $this->faker->sentence,
            'is_sales' => '1',
        ];
    }
}
