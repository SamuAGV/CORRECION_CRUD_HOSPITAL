<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
@extends('layouts.app')

@section('content')

<main>
<center>
    <h1>PACIENTES</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('crearPaciente') }}" class="btn btn-outline-success">Nuevo Registro</a>
</center>   
<hr>     
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                <td>{{ $paciente->id_paciente }}</td>

                    <td>
            @if ($paciente->foto && file_exists(public_path($paciente->foto)))
                <img src="{{ asset($paciente->foto) }}" alt="Foto del paciente" class="img-thumbnail" style="max-width: 50px;">
            @else
                <img src="{{ asset('img/paciente.png') }}" alt="Foto no disponible" class="img-thumbnail" style="max-width: 50px;">
            @endif</td>
                    <td>{{ $paciente->nombre }} {{ $paciente->apellidop }}</td>
                    <td>{{ $paciente->fecha_nacimiento }}</td>
                    <td>{{ $paciente->sexo }}</td>
                    <td>{{ $paciente->estatus }}</td>
                    <td>
                        <a href="{{ route('detallesPaciente', $paciente->id_paciente) }}" class="btn btn-outline-info">Detalles</a>
                        <a href="{{ route('editarPaciente', $paciente->id_paciente) }}" class="btn btn-outline-warning">Editar</a>
                        <a href="{{ route('eliminarPaciente', $paciente->id_paciente) }}" class="btn btn-outline-danger" onclick="return confirm('¿Seguro que desea borrar el registro?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        </tbody>
    </table>
</main>
@endsection
</body>
</html>
