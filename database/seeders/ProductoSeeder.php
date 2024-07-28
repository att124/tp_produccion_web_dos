<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Producto::create([
            'titulo' => 'Smart TV FHD 43" LG 43LM6350"',
            'precio' => 550000,
            'stock' => 5,
            'marca' => 'LG',
            'descripcion' => 'Smart TV FHD 43 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
             'imagen1' => 'imgs/tele1.1.jpg',
             'imagen2' => 'imgs/tele1.2.jpg',
             'imagen3' => 'imgs/tele1.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);

        Producto::create([
            'titulo' => 'Smart TV 4K Led 75” Noblex DK75X7500"',
            'precio' => 1750000,
            'stock' => 3,
            'marca' => 'Noblex',
            'descripcion' => 'Smart TV 4K Led 75 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
            'imagen1' => 'imgs/tele2.1.jpg',
            'imagen2' => 'imgs/tele2.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);

        Producto::create([
            'titulo' => 'Smart TV LG 65" UHD 4K OLED 65C3PSA"',
            'precio' => 4000000,
            'stock' => 2,
            'marca' => 'LG',
            'descripcion' => 'Smart TV LG 65 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
            'imagen1' => 'imgs/tele3.1.jpg',
            'imagen2' => 'imgs/tele3.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);


        Producto::create([
            'titulo' => 'Smart TV 55” 4K HDR TCL L55P735-F"',
            'precio' =>  850000,
            'stock' => 9,
            'marca' => 'TCL',
            'descripcion' => 'Smart TV TCL 55 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
            'imagen1' => 'imgs/tele4.1.jpg',
            'imagen2' => 'imgs/tele4.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);

        Producto::create([
            'titulo' => 'Smart TV Philips 75” 4K Mini LED',
            'precio' =>  2050000,
            'stock' => 6,
            'marca' => 'PHILIPS',
            'descripcion' => 'Smart TV Philips 75 pulgadas 4K Ultra HD',
            'especificacion' => 'Resolución 3840 x 2160, HDR10, Smart TV',
            'imagen1' => 'imgs/tele5.1.jpg',
            'imagen2' => 'imgs/tele5.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 1,
        ]);

        Producto::create([
            'titulo' => 'Lavarropas Carga Frontal Longvie 8 Kg 1200 RPM L18012',
            'precio' => 800000,
            'stock' => 8,
            'marca' => 'Longvie',
            'descripcion' => 'Lavarropas de carga frontal Longvie con capacidad de 8 Kg y 1200 RPM.',
            'especificacion' => 'Carga frontal, 8 Kg, 1200 RPM, 15 programas de lavado, eficiencia energética A+.',
            'imagen1' => 'imgs/lava1.1.jpg',
            'imagen2' => 'imgs/lava1.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);

        Producto::create([
            'titulo' => 'Lavarropas Carga Frontal 9.5Kg 1400 RPM Samsung',
            'precio' => 1250000,
            'stock' => 3,
            'marca' => 'Samsung',
            'descripcion' => 'Lavarropas de carga frontal Samsung con capacidad de 9.5 Kg y 1400 RPM.',
            'especificacion' => 'Carga frontal, 9.5 Kg, 1400 RPM, tecnología EcoBubble, eficiencia energética A++.',
            'imagen1' => 'imgs/lava2.2.jpg',
            'imagen2' => 'imgs/lava2.2.jpg',
            'imagen3' => 'imgs/lava2.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);

        Producto::create([
            'titulo' => 'Lavarropas Semiautomático Patrick 5kg LRPK56SB',
            'precio' => 205000,
            'stock' => 15,
            'marca' => 'Patrick',
            'descripcion' => 'Lavarropas semiautomático Patrick con capacidad de 5 Kg.',
            'especificacion' => 'Carga superior, 5 Kg, 2 programas de lavado, eficiencia energética A.',
            'imagen1' => 'imgs/lava3.1.jpg',
            'imagen2' => 'imgs/lava3.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);

        Producto::create([
            'titulo' => 'Lavarropas Automático Electrolux 10kg Premium Care',
            'precio' => 875000,
            'stock' => 6,
            'marca' => 'Electrolux',
            'descripcion' => 'Lavarropas automático Electrolux con capacidad de 10 Kg.',
            'especificacion' => 'Carga frontal, 10 Kg, múltiples programas de lavado, eficiencia energética A+.',
            'imagen1' => 'imgs/lava4.1.jpg',
            'imagen2' => 'imgs/lava4.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);

        Producto::create([
            'titulo' => 'Lavarropas Carga Frontal Inverter LG WM85WVC5S6P',
            'precio' => 1450000,
            'stock' => 8,
            'marca' => 'LG',
            'descripcion' => 'Lavarropas de carga frontal LG Inverter con capacidad de 8,5 Kg.',
            'especificacion' => 'Carga frontal, 8,5 Kg, motor inverter, eficiencia energética A++.',
            'imagen1' => 'imgs/lava5.1.jpg',
            'imagen2' => 'imgs/lava5.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 2,
        ]);

        Producto::create([
            'titulo' => 'Celular Samsung Galaxy A15 LTE 4GB 128GB Blue Black',
            'precio' => 500000,
            'stock' => 10,
            'marca' => 'Samsung',
            'descripcion' => 'Celular Samsung Galaxy A15 con 4GB de RAM y 128GB de almacenamiento.',
            'especificacion' => 'Pantalla de 6.5", cámara de 48MP, batería de 5000mAh, Android 11.',
            'imagen1' => 'imgs/celular1.1.jpg',
            'imagen2' => 'imgs/celular1.2.jpg',
            'imagen3' => 'imgs/celular1.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 4,
        ]);

        Producto::create([
            'titulo' => 'Celular Motorola Moto G54 5G 128GB Ambrosia',
            'precio' =>  600000,
            'stock' => 8,
            'marca' => 'motorola',
            'descripcion' => 'Celular Motorola Moto G54 5G',
            'especificacion' => '128GB almacenamiento, 5000mAh batería',
            'imagen1' => 'imgs/celular2.1.jpg',
            'imagen2' => 'imgs/celular2.2.jpg',
            'imagen3' =>'imgs/celular2.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 4,
        ]);

        Producto::create([
            'titulo' => 'Celular Samsung Galaxy A05 LTE 128GB Negro',
            'precio' =>  350000,
            'stock' => 15,
            'marca' => 'samsung',
            'descripcion' => 'Celular Samsung Galaxy A05 LTE',
            'especificacion' => '128GB almacenamiento, 4GB RAM',
            'imagen1' => 'imgs/celular3.1.jpg',
            'imagen2' => 'imgs/celular3.2.jpg',
            'imagen3' => 'imgs/celular3.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 4,
        ]);

        Producto::create([
            'titulo' => 'Celular Samsung Z Fold 5 256GB Phantom Black',
            'precio' =>  3600000,
            'stock' => 9,
            'marca' => 'samsung',
            'descripcion' => 'Celular Samsung Z Fold 5',
            'especificacion' => '256GB almacenamiento',
            'imagen1' => 'imgs/celular4.1.jpg',
            'imagen2' => 'imgs/celular4.2.jpg',
            'imagen3' => 'imgs/celular4.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 4,
        ]);

        Producto::create([
            'titulo' => 'Heladera con Freezer Drean Blanca',
            'precio' =>  850000,
            'stock' => 8,
            'marca' => 'dream',
            'descripcion' => 'Heladera con Freezer 280L',
            'especificacion' => 'Clase A, blanco',
            'imagen1' => 'imgs/heladera1.1.jpg',
            'imagen2' => 'imgs/heladera1.2.jpg',
            'imagen3' => 'imgs/heladera1.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 5,
        ]);


        Producto::create([
            'titulo' => ' Heladera Bajo Mesada Whirlpool',
            'precio' =>  450000,
            'stock' => 5,
            'marca' => 'whirlpool',
            'descripcion' => 'Heladera bajo mesada',
            'especificacion' => '120L, clase A',
            'imagen1' => 'imgs/heladera2.1.jpg',
            'imagen2' => 'imgs/heladera2.2.jpg',
            'imagen3' => 'imgs/heladera2.3.jpg',
            'imagen4' => null,
            'fk_categoria' => 5,
        ]);


        Producto::create([
            'titulo' => 'Exhibidora Vertical Inelro MT980 980Lts',
            'precio' =>  1000000,
            'stock' => 6,
            'marca' => 'inelro',
            'descripcion' => 'Exhibidora Vertical 980L',
            'especificacion' => 'Temperatura -18C a -22C',
            'imagen1' => 'imgs/heladera3.1.jpg',
            'imagen2' => 'imgs/heladera3.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 5,
        ]);

        Producto::create([
            'titulo' => 'Freezer Sigma FH2600BPa 223Lt',
            'precio' =>  600000,
            'stock' => 8,
            'marca' => 'sigma',
            'descripcion' => 'Freezer Horizontal 223L',
            'especificacion' => 'Clase A+, Blanco',
            'imagen1' => 'imgs/heladera4.1.jpg',
            'imagen2' => 'imgs/heladera4.2.jpg',
            'imagen3' => null,
            'imagen4' => null,
            'fk_categoria' => 5,
        ]);

    }
}
