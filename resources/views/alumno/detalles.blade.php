@extends('app')

@section('titulo')
    <h1>Consultar Inasistencias</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Inasistencias</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>N° lista</th>
                    <th>Nombre del Alumno</th>
                    <th>Grupo</th>
                    <th>Fecha de la inasistencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inasistencias as $inasistencia)
                <tr>
                    <td>{{ $inasistencia->alumno->id }}</td>
                    <td>{{ $inasistencia->alumno->nombre }}</td>
                    <td>{{ $inasistencia->alumno->grupo }}</td>
                    <td>{{ $inasistencia->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
