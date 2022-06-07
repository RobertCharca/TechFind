<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioNegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario' => "629ea89c8ca14f8f880a8712",
            'valoracion' => $this->faker->numberBetween(1,5),
            'texto_comentario' => $this->faker->realText,
            'imagen' => $this->faker->imageUrl,
        ];
    }
}
