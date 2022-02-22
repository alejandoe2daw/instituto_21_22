<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alumno' => $this->faker->numberBetween(1),
            'grupo' => $this->faker->numberBetween(1)
        ];
    }
}
