<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Paciente</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
@extends('layouts.app')

@section('content')

<main>
    <center>
    <h1>Pacientes</h1>
    <hr>
    <h3>Alta de Paciente</h3>
    </center>
    <form action="{{ route('registrarPaciente') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control transparent-input" placeholder="Ingresa el Nombre" required>
        </div>
        <div class="form-group mb-3">
            <label for="apellidop">Apellido Paterno</label>
            <input type="text" name="apellidop" class="form-control transparent-input" placeholder="Ingresa el Apellido Paterno" required>
        </div>
        <div class="form-group mb-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control transparent-input" required>
        </div>
        <div class="form-group mb-3">
            <label for="sexo">Sexo</label>
            <select name="sexo" class="form-control transparent-select" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control transparent-file">
        </div>
        <div class="form-group mb-3">
            <label for="estatus">Estatus</label>
            <select name="estatus" class="form-control transparent-select" required>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <hr>
            <center>
            <button type="submit" class="btn btn-outline-success">Guardar</button>
            <a href="{{ route('pacientes') }}" class="btn btn-outline-secondary">Cancelar</a>
            </center>
    </form>
</main>

@endsection

</body>
</html>
