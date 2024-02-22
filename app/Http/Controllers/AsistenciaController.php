<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Alumno;
use App\Models\AsistenciaDetalle;
use App\Models\Inasistencia;

class AsistenciaController extends Controller
{
    public function asistencia(){
        $alumnos = Alumno::all();

        return view('alumno.asistencia', compact('alumnos'));
    }

    public function guardarAsistencia(Request $request){
        $datos = $request->input('alumnos');
        
        // Filtra los datos para asegurarse de que solo procese los alumnos con asistencia igual a 1
        $datos = array_filter($datos, function($alumno) {
            return $alumno['asistencia'] == 1;
        });
    
        // Itera sobre los datos filtrados para guardar la asistencia y las inasistencias
        foreach ($datos as $alumno_id => $falto) {
            // Guarda la asistencia en la tabla asistencia_detalle
            $asistenciaDetalle = AsistenciaDetalle::create([
                'clase_id' => 1, // Asegúrate de tener el id de la clase disponible en el request
            ]);
    
            // Registra la inasistencia para el alumno
            Inasistencia::create([
                'asistencia_detalle_id' => $asistenciaDetalle->id,
                'alumno_id' => $alumno_id,
            ]);
        }
    
        return redirect('/home'); // Redirige a donde quieras después de guardar los datos
    }
}    