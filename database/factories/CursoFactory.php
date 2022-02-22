<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shortname' => $this->faker->word(),
            'fullname' => $this->faker->sentence(),
            'summary' => $this->faker->paragraph(),
            'showgrades' => $this->faker->boolean(),
            'startdate' => $this->faker->date(),
        ];
    }
}
