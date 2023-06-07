<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Ejecución del servicio
        $niveles = ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto'];

        foreach($niveles as $nivel){
            DB::table('niveles')->insert([
                'nombre'=> $nivel
            ]);
        }
    }
}
