<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
@extends('layouts.app')

@section('content')

<main>
    <center>
    <h1>PACIENTES</h1>
    <hr>
    <h3>Editar Paciente</h3>
    </center>
    <form action="{{ route('actualizarPaciente', $paciente->id_paciente) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control transparent-input" value="{{ $paciente->nombre }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="apellidop">Apellido Paterno</label>
            <input type="text" name="apellidop" class="form-control transparent-input" value="{{ $paciente->apellidop }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control transparent-input" value="{{ $paciente->fecha_nacimiento }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="sexo">Sexo</label>
            <select name="sexo" class="form-control transparent-select" required>
                <option value="Masculino" {{ $paciente->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $paciente->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control transparent-file">
        </div>
        <div class="form-group mb-3">
            <label for="estatus">Estatus</label>
            <select name="estatus" class="form-control transparent-select" required>
                <option value="Activo" {{ $paciente->estatus == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ $paciente->estatus == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <center>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
        <a href="{{ route('pacientes') }}" class="btn btn-outline-secondary">Cancelar</a>
        </center>
    </form>
</main>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
