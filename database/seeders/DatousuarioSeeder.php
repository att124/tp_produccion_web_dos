<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Datousuario;

class DatousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     Datousuario::create([

        'apellido' => 'Fernandez',
        'dni' => '42138023',
        'localidad' => 'San martin',
        'calle' => 'Ayacucho',
        'altura' => 2334,
        'piso' => null,
        'fk_provincia' => 1,


     ]);

     Datousuario::create([
        'apellido' => 'Gomez',
        'dni' => '45367890',
        'localidad' => 'Lanús',
        'calle' => 'Mitre',
        'altura' => 123,
        'piso' => null,
        'fk_provincia' => 1,
    ]);


    }
}
