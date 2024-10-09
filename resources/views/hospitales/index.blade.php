<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">

    <title>Hospitales</title>
</head>
<body>
@extends('layouts.app')

@section('title', 'Hospitales')

@section('content')
    <main>
        <center><h1>HOSPITALES</h1></center>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('crearHospital') }}" class="btn btn-outline-success">Nuevo Registro</a>
        </div>
        <hr>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($hospitales as $hospital)
                    <tr>
                        <td>{{$hospital->id_hospital }}</td>
                        <td>{{ $hospital->clave }}</td>
                        <td>{{ $hospital->nombre }}</td>
                        <td>{{ $hospital->estatus }}</td>
                        <td>
                            <a href="{{ route('detallesHospital', $hospital->id_hospital) }}" class="btn btn-outline-info">Detalles</a>
                            <a href="{{ route('editarHospital', $hospital->id_hospital) }}" class="btn btn-outline-warning">Editar</a>
                            <a href="{{ route('eliminarHospital', $hospital->id_hospital) }}" class="btn btn-outline-danger" onclick="return confirm('¿Seguro que desea borrar el registro?')">Eliminar</a>
                        </td>
                        
                    </tr>
                    
                @endforeach
                <thead>
                <tr>
                    <th>#</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th> </th>
                </tr>
            </thead>
            </tbody>
        </table>
    </main>
@endsection

</body>
</html>