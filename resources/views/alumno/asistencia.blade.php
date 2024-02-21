@extends('app')

@section('titulo')
    <h1>Asistencia de Alumnos</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Asistencia de Alumnos</li>
@stop

@section('contenido')
    <form method="POST" action="{{ url('guardarAsistencia') }}">
        @csrf
        <div class="responsive-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>N° lista</th>
                        <th>Nombre</th>
                        <th>Inasistencia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nombre }}</td>
                        <td>
                            <input type="hidden" name="alumnos[{{ $a->id }}][id]" value="{{ $a->id }}">
                            <input type="hidden" name="alumnos[{{ $a->id }}][asistencia]" value="presente">
                            <label>
                                <input type="checkbox" name="alumnos[{{ $a->id }}][asistencia]" value="inasistencia">
                            </label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
