<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Empleado;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador Default',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'administrador'
            // Otros campos del usuario si son necesarios
        ]);
        $vendedor = User::create([
            'name' => 'Vendedor Default',
            'email' => 'vendedor@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'vendedor'
            // Otros campos del usuario si son necesarios
        ]);
        $cliente = User::create([
            'name' => 'Cliente Default',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'cliente'
            // Otros campos del usuario si son necesarios
        ]);

        Empleado::create([
            'user_id' => $vendedor->id,
            'genero' => 'M',
            'fecha_nac' => '1989-12-13',
            'telefono' => '5555555555',
            'direccion' => 'Av Default 123',
            'sueldo' => 100,
        ]);

        Cliente::create([
            'user_id' => $cliente->id,
            'genero' => 'M',
            'fecha_nac' => '1989-12-13',
            'direccion' => 'Av Default 123',
            'telefono' => '5555555555',
        ]);
        $cat = Categoria::create([
            'nombre' => 'Varios',
            'descripcion' => 'Productos cuya categoría ha sido eliminada.'
        ]);
        $cereales = Categoria::create([
            'nombre' => 'Cereales',
            'descripcion' => 'Variedad de productos alimenticios derivados de granos como trigo, maíz, arroz, avena, entre otros.'
        ]);
        Producto::create([
            'name' => 'Arroz',
            'descripcion' => 'Bolsa de arroz blanco',
            'price' => 25.6,
            'unidades' => 10,
            'marca' => 'Verde Valle',
            'image_path' => 'arroz.jpg',
            'categoria_id' => $cereales->id
        ]);
        $vegetales = Categoria::create([
            'nombre' => 'Vegetales',
            'descripcion' => 'Frutas y verduras listas para su comsuno.'
        ]);
        Producto::create([
            'name' => 'Lechuga',
            'descripcion' => 'Lechuga fresa y deliciosa :)',
            'price' => 15.6,
            'unidades' => 10,
            'marca' => 'NA',
            'image_path' => 'lechuga.jpg',
            'categoria_id' => $vegetales->id
        ]);

        $this->call([
            CategoriaSeeder::class,
            ProductoSeeder::class,
            EmpleadoSeeder::class,
            ClienteSeeder::class,
        ]);
    }
}
 