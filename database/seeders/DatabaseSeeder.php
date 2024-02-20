<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\MaestroSeeder;
use Database\Seeders\GrupoSeeder;
use Database\Seeders\AlumnoGrupoSeeder;
use Database\Seeders\ClaseSeeder;
use Database\Seeders\AsistenciaDetalleSeeder;
use Database\Seeders\InasistenciaSeeder;
use Database\Seeders\NoticiaSeeder;
use Database\Seeders\AlumnoMateriaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AlumnoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(AlumnoMateriaSeeder::class);
        $this->call(MaestroSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(AlumnoGrupoSeeder::class);
        $this->call(ClaseSeeder::class);
        $this->call(AsistenciaDetalleSeeder::class);
        $this->call(InasistenciaSeeder::class);
    }
}
