<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id, 
            'genero' => fake()->randomElement(['M', 'F']), 
            'fecha_nac' => fake()->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d'),
            'telefono' => fake()->phoneNumber,
            'direccion' => fake()->address,
        ];
    }
}
