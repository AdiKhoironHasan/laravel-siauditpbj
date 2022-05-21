<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unit_id' => mt_rand(1, 3),
            'name' => $this->faker->colorName(),
            'no_kontrak' => $this->faker->numerify($this->faker->colorName() . '-#####'),
            'tgl_kontrak' => $this->faker->date(),
            'nilai_kontrak' => $this->faker->randomNumber(6, true),
            'tahun_anggaran' => $this->faker->year(),
        ];
    }
}
