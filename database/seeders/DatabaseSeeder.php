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
            'name' => 'Daniel Martínez',
            'email' => 'ejemplo@gmail.com',
            'password' => bcrypt('password'),
            // Otros campos del usuario si son necesarios
        ]);
    }
}
