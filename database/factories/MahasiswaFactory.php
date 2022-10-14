<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->randomNumber(9, true),
            'prodi_id' => $this->faker->numberBetween(1, 3),
            // 1-3 karena prodi nya cuman 3
        ];
    }
}
