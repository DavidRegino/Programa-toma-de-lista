@extends('app')

@section('titulo', 'Resultados de la Asistencia')

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Resultados de la Asistencia</li>
@stop

@section('contenido')
    <h1>Resultados de la Asistencia</h1>
    
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>N° lista</th>
                    <th>Nombre</th>
                    <th>Asistencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nombre }}</td>
                        <td>
                            @if ($a['asistencia'] == 'presente')
                                Presente
                            @else
                                Inasistencia
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
