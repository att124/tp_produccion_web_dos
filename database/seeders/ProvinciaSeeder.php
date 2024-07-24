<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            Provincia::Create([

                'NombreProvincia' => 'Buenos Aires',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Catamarca',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Chaco',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Chubut',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Corrientes',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Entre Rios',

            ]);


            Provincia::Create([

                'NombreProvincia' => 'Formosa',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Jujuy',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'La Pampa',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'La Rioja',

            ]);


            Provincia::Create([

                'NombreProvincia' => 'Mendoza',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Misiones',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Neuquen',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Río Negro',

            ]);


            Provincia::Create([

                'NombreProvincia' => 'Salta',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'San Juan',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'San Luis',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Santa Cruz',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Santa Fe',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Santiago del Estero',

            ]);

            Provincia::Create([

                'NombreProvincia' => 'Tucumán',

            ]);

        }
}
