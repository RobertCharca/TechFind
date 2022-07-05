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
            'usuario_id' => "62b8d67cd6bc321516e1fbc6",
            'negocio_id' => "62b9ff1092399b353ee437c0",
            'subtema'=>$this->faker->text($maxNbChars = 20),
            'valoracion' => $this->faker->numberBetween(1,5),
            'texto_comentario' => $this->faker->realText,
            'imagen' => $this->faker->imageUrl,
        ];
    }
}
