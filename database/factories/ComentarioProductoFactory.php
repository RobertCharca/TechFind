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
            'usuario_id' => "62b8d67cd6bc321516e1fbc6",
            'producto_id'=>"62abd94f5245000092000334",
            'subtema'=>$this->faker->text($maxNbChars = 20),
            'valoracion' => $this->faker->numberBetween(1,5),
            'texto_comentario' => $this->faker->realText,
            'imagen' => $this->faker->imageUrl,
        ];
    }
}
