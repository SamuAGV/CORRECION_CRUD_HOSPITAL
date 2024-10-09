<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Médico</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container mt-5">
<center><h1>Detalles del Médico "<strong>{{ $medico->nombre }} {{ $medico->apellidop }}</strong>"</h1></center>
<hr>
    <div class="card text-white bg-dark mb-3">
        <div class="card-body">
        <hp class="card-text">Nombre: {{ $medico->nombre }} {{ $medico->apellidop }}</p>
            <p class="card-text">Clave: {{ $medico->clave }}</p>
            <p class="card-text">Fecha de Nacimiento: {{ $medico->fecha_nacimiento }}</p>
            <p class="card-text">Sexo: {{ $medico->sexo }}</p>
            <p class="card-text">Email: {{ $medico->email }}</p>
            <p class="card-text">Estatus: {{ $medico->estatus }}</p>
            @if ($medico->foto && file_exists(public_path($medico->foto)))
    <p>Foto:</p>
    <img src="{{ asset($medico->foto) }}" alt="Foto de Médico" class="img-thumbnail" style="max-width: 150px;">
@else
    <p>Foto:</p>
    <img src="{{ asset('img/medico.png') }}" alt="Foto no disponible" class="img-thumbnail" style="max-width: 150px;">
@endif


        </div>
    </div>
    <a href="{{ route('medicos') }}" class="btn btn-outline-primary">Regresar</a>
</div>

@endsection
</body>
</html>
