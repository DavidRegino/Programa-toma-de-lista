<?php

namespace Database\Seeders;

use App\Models\AlumnoGrupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        AlumnoGrupo::create([ 'alumno_id' =>1 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>2 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>3 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>4 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>5 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>6 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>7 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>8 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>9 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>10 , 'grupo_id' => 1]);
        AlumnoGrupo::create([ 'alumno_id' =>11, 'grupo_id' => 1]);
    }
}
