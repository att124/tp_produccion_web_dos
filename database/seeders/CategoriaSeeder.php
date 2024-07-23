<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Categoria::Create([

            'Categoria' => 'Televisores',

        ]);

        Categoria::Create([

            'Categoria' => 'Sistemas de sonido',

        ]);


        Categoria::Create([

            'Categoria' => 'Secadores de pelo',

        ]);


        Categoria::Create([

            'Categoria' => 'Licuadoras',

        ]);


        Categoria::Create([

            'Categoria' => 'Cafeteras',

        ]);


        Categoria::Create([

            'Categoria' => 'Aires acondicionados',

        ]);

        Categoria::Create([

            'Categoria' => 'Hornos',

        ]);

    }
}
