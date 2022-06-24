<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create(
            [
                'nivel' => 'fácil',
                'cantidad_piezas' => 16,
                'puntos' => 500,
                'tiempo_establecido' => '04:00'
            ]
        );
        Nivel::create([
            'nivel' => 'medio',
            'cantidad_piezas' => 32,
            'puntos' => 1000,
            'tiempo_establecido' => '06:00'
        ]);
        Nivel::create([
            'nivel' => 'fácil',
            'cantidad_piezas' => 64,
            'puntos' => 2000,
            'tiempo_establecido' => '08:00'
        ]);
    }
}
