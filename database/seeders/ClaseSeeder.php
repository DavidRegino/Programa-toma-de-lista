<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create([ 'materia_id' =>1 , 'grupo_id' => 1, 'maestro_id' => 1,]);   
    }
}
