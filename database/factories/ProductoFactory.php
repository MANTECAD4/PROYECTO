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
            'name'=>fake()->unique()->word(),
            'slug'=>fake()->word(),
            'descripcion'=>fake()->sentence(),
            'price'=>fake()->randomFloat(2, 0.01, 1000.00),
            'unidades'=>fake()->randomNumber(3),
            'marca'=>fake()->unique()->word(),
            'image_path'=>fake()->randomElement(['macbook-pro.png','iphone-11-pro.png']),
            'categoria_id'=> Categoria::inRandomOrder()->first()->id
        ];
    }
}
