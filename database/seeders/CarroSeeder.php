<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carro::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'anio' => 2020,
            'color' => 'Blanco',
            'precio' => 20000.00,
            'kilometraje' => 15000,
        ]);

        Carro::create([
            'marca' => 'Honda',
            'modelo' => 'Civic',
            'anio' => 2019,
            'color' => 'Negro',
            'precio' => 22000.00,
            'kilometraje' => 18000,
        ]);

        Carro::create([
            'marca' => 'Ford',
            'modelo' => 'Focus',
            'anio' => 2021,
            'color' => 'Azul',
            'precio' => 25000.00,
            'kilometraje' => 10000,
        ]);

        Carro::create([
            'marca' => 'Chevrolet',
            'modelo' => 'Malibu',
            'anio' => 2018,
            'color' => 'Gris',
            'precio' => 18000.00,
            'kilometraje' => 20000,
        ]);

        Carro::create([
            'marca' => 'Nissan',
            'modelo' => 'Sentra',
            'anio' => 2022,
            'color' => 'Rojo',
            'precio' => 24000.00,
            'kilometraje' => 12000,
        ]);

        Carro::create([
            'marca' => 'Mazda',
            'modelo' => '3',
            'anio' => 2020,
            'color' => 'Blanco',
            'precio' => 23000.00,
            'kilometraje' => 17000,
        ]);

        Carro::create([
            'marca' => 'Hyundai',
            'modelo' => 'Elantra',
            'anio' => 2019,
            'color' => 'Plata',
            'precio' => 21000.00,
            'kilometraje' => 16000,
        ]);

        Carro::create([
            'marca' => 'Kia',
            'modelo' => 'Optima',
            'anio' => 2021,
            'color' => 'Verde',
            'precio' => 26000.00,
            'kilometraje' => 14000,
        ]);

        Carro::create([
            'marca' => 'Volkswagen',
            'modelo' => 'Jetta',
            'anio' => 2020,
            'color' => 'Negro',
            'precio' => 22000.00,
            'kilometraje' => 19000,
        ]);

        Carro::create([
            'marca' => 'Subaru',
            'modelo' => 'Impreza',
            'anio' => 2021,
            'color' => 'Azul',
            'precio' => 27000.00,
            'kilometraje' => 11000,
        ]);
    }
}
