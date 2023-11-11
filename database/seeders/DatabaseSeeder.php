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
        $cat = Categoria::create([
            'nombre' => 'Varios',
            'descripcion' => 'Aqui van los productos cuya categoría fue borrada.'
        ]);

        $this->call([
            CategoriaSeeder::class,
            ProductoSeeder::class,
        ]);
    }
}
 