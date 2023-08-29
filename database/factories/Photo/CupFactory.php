<?php

namespace Database\Factories\Photo;

use Illuminate\Database\Eloquent\Factories\Factory;

class CupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $e = [
            'name' => $this->faker->name(),
            'opis' => $this->faker->text(),
            'lat' => '52.654',
            'lon' => '53.654',
        ];

        for ($i = 1; $i <= 10; $i++) {
            $e['img' . $i] = 'https://via.placeholder.com/300.png/09f/fff';
        }

        return $e;
    }
}
