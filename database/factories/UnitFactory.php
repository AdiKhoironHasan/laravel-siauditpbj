<?php

namespace Database\Factories;

use App\Models\User;
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
        // $idUsers = User::where('level', 'Auditee')->get();

        return [
            "user_id" => mt_rand(1, 6),
            "name" => $this->faker->unique()->jobTitle(),
        ];
    }
}
