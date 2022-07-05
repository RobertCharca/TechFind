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
            'negocio_id'=>'62abd93b5245000092000333',
            'nombre_producto'=>$this->faker->name,
            'descripcion'=>$this->faker->text($maxNbChars = 200),
            'fecha_creacion'=>$this->faker->iso8601($max = 'now'),
            'imagen'=>$this->faker->imageUrl(),
            //'negocio_id'=>'ingrese id de su propia tabla',
        ];
    }
}
