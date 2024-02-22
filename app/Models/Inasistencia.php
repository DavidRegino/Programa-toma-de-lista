<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inasistencia extends Model
{
    use HasFactory;

    protected $fillable = ['asistencia_detalle_id', 'alumno_id'];
    protected $table = 'inasistencias';

    public function detalleAsistencia()
    {
        return $this->belongsTo(AsistenciaDetalle::class, 'asistencia_detalle_id');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
}
