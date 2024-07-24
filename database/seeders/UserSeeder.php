<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Daniel',
            'email' => 'dani@gmail.com',
            'password' => bcrypt('dani'),
            'Fecha_ingreso' => now(),
            'Activo' => 1,
            'fk_rol' => 1,
            'fk_datos_usuario' => 1
        ]);

        User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@gmail.com',
            'password' => bcrypt('gustavo'),
            'Fecha_ingreso' => now(),
            'Activo' => 1,
            'fk_rol' => 2,
            'fk_datos_usuario' => 2
        ]);
    }
}
