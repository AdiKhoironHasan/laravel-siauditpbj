<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'level' => $this->faker->randomElement(['Auditor', 'Auditee', 'Direktur']),
            'level' => 'Auditor',
            'nohp' => $this->faker->randomNumber(9, true),
            'npak' => $this->faker->unique->randomNumber(9, true),
            'status' => $this->faker->randomElement(['Aktif']),
            'password' => bcrypt('password'),
            'foto' => 'default/empty-foto.png',
            'ttd' => 'default/empty-ttd.png'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
