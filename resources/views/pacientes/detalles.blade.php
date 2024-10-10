<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paciente</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <center>
    <h1>Detalles del Paciente "<strong>{{ $paciente->nombre }} {{ $paciente->apellidop }}</strong>"</h1>
    <hr>
    </center>
    <div class="card text-white bg-dark mb-3">
        <div class="card-body">
        <p class="card-text">Nombre: {{ $paciente->nombre }} {{ $paciente->apellidop }}</p>

            <p class="card-text">Fecha de Nacimiento: {{ $paciente->fecha_nacimiento }}</p>
            <p class="card-text">Sexo: {{ $paciente->sexo }}</p>
            <p class="card-text">Estatus: {{ $paciente->estatus }}</p>
            <p>Foto:</p>
            @if ($paciente->foto && file_exists(public_path($paciente->foto)))
                <img src="{{ asset($paciente->foto) }}" alt="Foto del paciente" class="img-thumbnail" style="max-width: 150px;">
            @else
                <img src="{{ asset('img/paciente.png') }}" alt="Foto no disponible" class="img-thumbnail" style="max-width: 150px;">
            @endif
        </div>
    </div>
    <a href="{{ route('pacientes') }}" class="btn btn-outline-primary">Regresar</a>
</div>

@endsection

</body>
</html>
