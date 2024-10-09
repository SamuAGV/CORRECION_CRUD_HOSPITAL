<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicos</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
@extends('layouts.app')

@section('content')
<main>
    <center><h1>M&Eacute;DICOS</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('crearMedico') }}" class="btn btn-outline-success">Nuevo Registro</a>
    </center>    
        <hr>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Fecha De Nacimiento</th>
                <th>Sexo</th>
                <th>E-Mail</th>
                <th>Estatus</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicos as $medico)
                <tr>
                    <td>{{ $medico->id_medico }}</td>
                    <td>
                        @if ($medico->foto && file_exists(public_path($medico->foto)))
                            <img src="{{ asset($medico->foto) }}" alt="Foto de Médico" class="img-thumbnail" style="max-width: 50px;">
                        @else
                            <img src="{{ asset('img/medico.png') }}" alt="Foto no disponible" class="img-thumbnail" style="max-width: 50px;">
                        @endif
                    </td>
                    <td>{{ $medico->clave }}</td>
                    <td>{{ $medico->nombre }} {{ $medico->apellidop }}</td>
                    <td>{{ $medico->fecha_nacimiento }}</td>
                    <td>{{ $medico->sexo }}</td>
                    <td>{{ $medico->email }}</td>
                    <td>{{ $medico->estatus }}</td>
                    <td>
                        <a href="{{ route('detallesMedico', $medico->id_medico) }}" class="btn btn-outline-info">Detalles</a>
                        <a href="{{ route('editarMedico', $medico->id_medico) }}" class="btn btn-outline-warning">Editar</a>
                        <a href="{{ route('eliminarMedico', $medico->id_medico) }}" class="btn btn-outline-danger" onclick="return confirm('¿Seguro que desea borrar el registro?')">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Fecha De Nacimiento</th>
                <th>Sexo</th>
                <th>E-Mail</th>
                <th>Estatus</th>
                <th></th>
            </tr>
        </thead>
        </tbody>
    </table>
</main>

@endsection

</body>
</html>
