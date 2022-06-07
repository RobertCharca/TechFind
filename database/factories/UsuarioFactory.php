<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'nombre_usuarios' => $this->faker->userName(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password,
            'pais' => $this->faker->country(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
