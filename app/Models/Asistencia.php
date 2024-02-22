<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = ['fecha']; // 'falto' no parece necesario aquí, ya que eso se manejará en las otras tablas.
    protected $table = 'alumno_asistencia';
    protected $connection = 'usuariosbd';

    public function detalles()
    {
        return $this->hasMany(AsistenciaDetalle::class, 'asistencia_id');
    }
}
