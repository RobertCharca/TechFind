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
            'negocio_id'=>$this->faker->numberBetween(1,10000),
        ];
    }
}
