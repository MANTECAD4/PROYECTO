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
        $categoria = Categoria::where('nombre', '!=', 'Varios')
        ->inRandomOrder()
        ->first();
        return [
            'name'=>fake()->unique()->word(),
            'descripcion'=>fake()->sentence(),
            'price'=>fake()->randomFloat(2, 0.01, 1000.00),
            'unidades'=>fake()->numberBetween(1,20),
            'marca'=>fake()->unique()->word(),
            'ruta_imagen'=>fake()->randomElement(['macbook-pro.png','iphone-11-pro.png']),
            'categoria_id'=> $categoria->id
        ];
    }
}
