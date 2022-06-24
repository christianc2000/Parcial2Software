<?php

namespace Database\Seeders;

use App\Models\PerfilUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PerfilUser::create(
            [
                'sexo' => 'm',
                'fecha_nacimiento' => '2022-01-04',
                'pais' => 'Bolivia',
                'username' => 'chelista_32',
                'puntos' => 20000,
                'user_id' => User::all()->first()->id
            ]
        );
    }
}
