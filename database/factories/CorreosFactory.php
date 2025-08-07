<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Correos>
 */
class CorreosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generar datos falsos para los campos 'correo' y 'clave'
        return [
            'correo' => $this->faker->unique()->safeEmail(), // Genera un correo electrónico único y seguro
            'clave' => $this->faker->password(), // Genera una contraseña aleatoria
        ];
    }
}
