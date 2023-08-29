<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoCupsFactory extends Factory
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
