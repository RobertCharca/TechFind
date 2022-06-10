<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'=>$this->faker->numberBetween(1,10000),
            'categoria_id'=>$this->faker->numberBetween(1,10000),
            'imagenes'=>$this->faker->imageUrl(),
        ];
    }
}
