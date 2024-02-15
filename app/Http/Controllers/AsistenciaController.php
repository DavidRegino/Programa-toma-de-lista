<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia; // Asegúrate de importar el modelo de Asistencia

class AsistenciaController extends Controller
{
    public function asistencia(){
        $alumnos = Alumno::all();

        return view('alumno.asistencia', compact('alumnos'));
    }
}

