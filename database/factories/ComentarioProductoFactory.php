<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id' => "62abcccf46130000780024e4",
            'usuario_id' => "62c1eaac296c00007e004642",
            'valoracion' => $this->faker->numberBetween(1,5),
            'texto_comentario' => $this->faker->realText,
            'imagen' => $this->faker->imageUrl,
        ];
    }
}
