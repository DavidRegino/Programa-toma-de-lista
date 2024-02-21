<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Alumno;
 // Asegúrate de importar el modelo de Asistencia

class AsistenciaController extends Controller
{
    public function asistencia(){
        $alumnos = Alumno::all();

        return view('alumno.asistencia', compact('alumnos'));

    }

    public function guardarAsistencia(Request $datos){
        $alumnos = Alumno::all();
        $datos = $datos->input('alumnos');
        

        return view('alumno.guardar', compact('alumnos'));

    }
}

