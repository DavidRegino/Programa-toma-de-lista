<?php

namespace Database\Seeders;

use App\Models\Inasistencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InasistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inasistencia::create([ 'asistencia_detalle_id' =>1, 'alumno_id' =>1 ]);
    }
}
