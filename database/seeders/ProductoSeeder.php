<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Producto::create([
            'titulo' => 'Televisor LG 55"',
            'precio' => 1200.00,
            'stock' => 15,
            'marca' => 'LG',
            'descripcion' => 'Televisor LG 55 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
            'imagen1' => 'imgs/televisor1.jpg',
            'imagen2' => 'imgs/televisor2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);

        Producto::create([
            'titulo' => 'Sistema de sonido Sony',
            'precio' => 300.00,
            'stock' => 25,
            'marca' => 'Sony',
            'descripcion' => 'Sistema de sonido con Bluetooth y NFC',
            'especificacion' => 'Potencia 500W, Conectividad Bluetooth, NFC, USB',
            'imagen1' => 'imgs/sonido1.jpg',
            'imagen2' => 'imgs/sonido2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);


        Producto::create([
            'titulo' => 'Secador de pelo Philips',
            'precio' => 50.00,
            'stock' => 40,
            'marca' => 'Philips',
            'descripcion' => 'Secador de pelo con tecnología iónica',
            'especificacion' => 'Potencia 2200W, Tecnología iónica, 3 ajustes de temperatura',
            'imagen1' => 'imgs/secador1.jpg',
            'imagen2' => 'imgs/secador2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 3,
        ]);

        Producto::create([
            'titulo' => 'Licuadora Oster',
            'precio' => 80.00,
            'stock' => 20,
            'marca' => 'Oster',
            'descripcion' => 'Licuadora con vaso de vidrio resistente',
            'especificacion' => 'Potencia 600W, 3 velocidades, Vaso de vidrio',
            'imagen1' => 'imgs/licuadora1.jpg',
            'imagen2' => 'imgs/licuadora2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 4,
        ]);

        Producto::create([
            'titulo' => 'Cafetera Nespresso',
            'precio' => 150.00,
            'stock' => 30,
            'marca' => 'Nespresso',
            'descripcion' => 'Cafetera automática con cápsulas',
            'especificacion' => 'Compatible con cápsulas Nespresso, Sistema de calentamiento rápido',
            'imagen1' => 'imgs/cafetera1.jpg',
            'imagen2' => 'imgs/cafetera2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 5,
        ]);



    }
}
