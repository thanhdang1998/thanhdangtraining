<?php

namespace Database\Factories;

use App\Models\tabuser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class tabuserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tabuser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        
            return [
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->safeEmail,
                'password' => Hash::make(123456), // password
                'verify_email' => now(),
                'remember_token' => Str::random(10),
                'is_active' => '1',
                'is_delete' => '0',
                'group_role' => Arr::random(['Admin','Reviewer','Editor']),
            ];
    }
}
