<?php

namespace Database\Factories\Photo;

use Illuminate\Database\Eloquent\Factories\Factory;

class CupsFactory extends Factory
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
            'opis' => $this->faker->text() ,
            'lat' => '52.654',
            'lon' => '53.654',
        ];
    }
}
