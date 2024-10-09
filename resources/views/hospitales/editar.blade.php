<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Hospital</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
@extends('layouts.app')

@section('content')
    <center>
    <h1>HOSPITALES</h1>
    <hr>
    <h1>Editar Hospital</h1>
    <hr>
    </center>
    <form action="{{ route('actualizarHospital', $hospital->id_hospital) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="clave">Clave</label>
            <input type="text" name="clave" class="form-control" value="{{ $hospital->clave }}" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $hospital->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="estatus">Estatus</label>
            <select name="estatus" class="form-control" required>
                <option value="Activo" {{ $hospital->estatus == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ $hospital->estatus == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <hr>
        <center>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
        <a href="{{ route('hospitales') }}" class="btn btn-outline-secondary">Cancelar</a>
        </center>
    </form>

@endsection

</body>
</html>