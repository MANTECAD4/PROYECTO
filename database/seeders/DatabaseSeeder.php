<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriaSeeder::class,
            ProductoSeeder::class,
        ]);
        User::create([
            'name' => 'Administrador Default',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'administrador'
            // Otros campos del usuario si son necesarios
        ]);
        User::create([
            'name' => 'Vendedor Default',
            'email' => 'vendedor@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'vendedor'
            // Otros campos del usuario si son necesarios
        ]);
        User::create([
            'name' => 'Cliente Default',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('password'),
            'type_user' => 'cliente'
            // Otros campos del usuario si son necesarios
        ]);
    }
}
