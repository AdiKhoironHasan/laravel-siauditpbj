<?php

namespace Database\Factories;

use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => mt_rand(1, 6),
            "nama" => $this->faker->unique()->jobTitle(),
        ];
    }
}
