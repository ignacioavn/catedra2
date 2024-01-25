<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Comino Molido',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '5000',
            'image' => 'images/1.jfif',
        ]);
        \App\Models\Product::create([
            'name' => 'Castañas de caju',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '3000',
            'image' => 'images/2.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Ciboulette',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '2500',
            'image' => 'images/3.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Splenda Stevia',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '6000',
            'image' => 'images/4.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Mix Italiano',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '2500',
            'image' => 'images/5.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Nueces',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '1500',
            'image' => 'images/6.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Papas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '4000',
            'image' => 'images/7.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Espinaca',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '5000',
            'image' => 'images/8.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Huevos',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '7000',
            'image' => 'images/9.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Soda Caústica',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit neque maecenas, turpis ornare donec litora quisque est blandit. Senectus hendrerit phasellus torquent nostra tempus nisl fames semper, est et ph.',
            'price' => '2600',
            'image' => 'images/10.jpg',
        ]);
    }
}

