<?php

namespace Database\Seeders;

use App\Models\Phones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = [
            [
                'brand' => 'Xiaomi',
                'model' => 'Redmi Note 10S',
                'title' => 'Xiaomi Redmi Note 10S Dual 2.2GB 8GB 128GB',
                'description' => 'Smartphone Xiaomi Redmi Note 10S Dual. Cuenta con CPU de 8 núcleos de 2.2GB (4x2.2GB 4x2.0GB) 8GB de memoria RAM y 128GB de capacidad de almacenamiento.',
                'price' => '269',
            ],
            [
                'brand' => 'Xiaomi',
                'model' => 'Redmi Note 11 Pro',
                'title' => 'Xiaomi Note 11 Pro 128gb 6gb Ram 128 Rom 108mp',
                'description' => 'El Xiaomi Redmi Note 11 Pro en su versión internacional llega con una pantalla AMOLED FHD+ de 6.67 pulgadas y tasa de refresco de 120Hz. Potenciado por un procesador MediaTek Helio G96, el Redmi Niote 11 Pro cuenta con 6GB de RAM y 128GB de almacenamiento interno. Su conjunto posterior de cámaras incluyen una cámara principal de 108MP secundada por cámaras ultrawide de 8MP, macro de 2MP y profundidad de 2MP, mientras que la cámara selfie es de 16MP. Con una batería de 5000 mAh de carga rápida de 67W, el Redmi Note 11 Pro completa sus características con parlantes stereo, lector de huellas lateral y MIUI 13 basado en Android 11.',
                'price' => '357',
            ],
            [
                'brand' => 'Apple',
                'model' => 'iPhone 13 Pro',
                'title' => 'Apple iPhone 13 Pro 128 Gb',
                'description' => 'iPhone 13 Pro. El mayor avance en el sistema de cámaras Pro de Apple hasta ahora. Pantalla Super Retina XDR con ProMotion que brinda una respuesta más rápida y fluida. Chip A15 Bionic para un rendimiento fuera de serie. Diseño resistente y un gran salto en duración de batería.',
                'price' => '1499',
            ],
            [
                'brand' => 'Samsung',
                'model' => 'iPhone 13 Pro',
                'title' => 'Samsung Galaxy A13 Dual SIM 128 GB light blue 4 GB RAM',
                'description' => 'Fotografía profesional en tu bolsillo
                Descubrí infinitas posibilidades para tus fotos con las 4 cámaras principales de tu equipo. Poné a prueba tu creatividad y jugá con la iluminación, diferentes planos y efectos para obtener grandes resultados.

                Mayor rendimiento
                Su memoria RAM de 4 GB permite que tu smartphone funcione de manera fluida y sin demoras al realizar distintas tareas, jugar o navegar.',
                'price' => '239',
            ],
        ];

        Phones::insert($phones);
    }
}
