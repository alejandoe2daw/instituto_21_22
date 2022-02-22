<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso' => $this->faker->numberBetween(1),
            'letra' => Str::random(1),
            'nombre' => $this->faker->name(),
            'tutor'=> $this->faker->numberBetween(1),
            'anyoescolar' => $this->faker->numberBetween(4,1999, 2018),
            'nivel'=> $this->faker->numberBetween(1),
            'verificado'=>null,
            'creador' => $this->faker->numberBetween(1),

        ];
    }
}
