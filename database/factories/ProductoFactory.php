<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->unique()->word(),
            'descripcion'=>fake()->sentence(),
            'precio'=>fake()->randomFloat(2, 0.01, 1000.00),
            'unidades'=>fake()->randomNumber(3),
            'marca'=>fake()->unique()->word(),
            'categoria_id'=> Categoria::inRandomOrder()->first()->id
        ];
    }
}
