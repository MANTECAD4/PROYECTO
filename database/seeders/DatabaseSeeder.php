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
        $this->call([
            CategoriaSeeder::class,
            EmpleadoSeeder::class,
            ClienteSeeder::class,
        ]);
    }
}
 