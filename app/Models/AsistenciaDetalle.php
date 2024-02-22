<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaDetalle extends Model
{
    use HasFactory;

    protected $fillable = ['clase_id'];
    protected $table = 'asistencia_detalles';

    public function asistencia()
    {
        return $this->belongsTo(Asistencia::class, 'asistencia_id');
    }

    public function inasistencias()
    {
        return $this->hasMany(Inasistencia::class, 'asistencia_detalle_id');
    }
}
