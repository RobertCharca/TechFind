<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_negocio'=>$this->faker->word,
            'descripcion'=>$this->faker->text($maxNbChars = 200),
            'hora_atencion'=>$this->faker->text($maxNbChars = 100),
            'pais'=>$this->faker->country,
            'ciudad'=>$this->faker->city,
            'direccion'=>$this->faker->address,
            'imagen_portada'=>$this->faker->imageUrl(),
            'imagen_negocio'=>$this->faker->imageUrl(),
            'correo_electronico'=>$this->faker->unique()->companyEmail,
            'fecha_creacion'=>$this->faker->iso8601($max = 'now'),
            'fecha_actualizacion'=>$this->faker->iso8601($max = 'now'),
        ];
    }
}
