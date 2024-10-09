<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Médico</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
@extends('layouts.app')

@section('content')

<main>
    <center>
    <h1>M&Eacute;DICOS</h1>
    <hr>
    <h3>Editar M&eacute;dico</h3>
    </center>
    <hr>
    <form action="{{ route('actualizarMedico', $medico->id_medico) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="clave">Clave</label>
            <input type="text" name="clave" class="form-control transparent-input" value="{{ $medico->clave }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control transparent-input" value="{{ $medico->nombre }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="apellidop">Apellido Paterno</label>
            <input type="text" name="apellidop" class="form-control transparent-input" value="{{ $medico->apellidop }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control transparent-input" value="{{ $medico->fecha_nacimiento }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="sexo">Sexo</label>
            <select name="sexo" class="form-control transparent-select" required>
                <option value="Masculino" {{ $medico->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $medico->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control transparent-file">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control transparent-input" value="{{ $medico->email }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="estatus">Estatus</label>
            <select name="estatus" class="form-control transparent-select" required>
                <option value="Activo" {{ $medico->estatus == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ $medico->estatus == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <hr>
        <center>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
        <a href="{{ route('medicos') }}" class="btn btn-outline-secondary">Cancelar</a>
        </center>
    </form>
</main>

@endsection

</body>
</html>
