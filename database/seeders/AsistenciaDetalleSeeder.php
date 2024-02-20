<?php

namespace Database\Seeders;

use App\Models\AsistenciaDetalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenciaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AsistenciaDetalle::create([ 'clase_id' =>1]); 
    }
}
