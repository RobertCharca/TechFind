<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_producto'=>$this->faker->name,
            'descripcion'=>$this->faker->text($maxNbChars = 200),
            'fecha_creacion'=>$this->faker->iso8601($max = 'now'),
            'negocio_id'=>'62ab74ce7b37cc4b590ea4a2',
        ];
    }
}
