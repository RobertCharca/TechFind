<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DetalleNegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telefono'=>$this->faker->unique()->e164PhoneNumber,
            'redes_sociales'=>$this->faker->unique()->word,
        ];
    }
}
