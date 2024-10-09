<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atencion</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #212424;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
            padding: 2rem;
        }
        footer {
            background-color: 'transparent';
            padding: 1rem 0;
        }
        .table-dark {
            color: white;
            background-color: #343a40;
        }
        .form-select, .input-group-text, .input-textarea , .form-control {
            background-color: #343a40;
            color: white;
            border: 1px solid #6c757d;
        }
        .form-select:focus, .form-textarea, .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }
        .nav-link {
            position: relative;
            display: inline-block;
        }
        .nav-link {
            position: relative;
            display: inline-block;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }


    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

        <main>
            <center><h3>ATENCI&Oacute;N</h3></center>
            <hr>
            <hr>
            <br>
            <form action="{{ route('asignacion_registrar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <center><h3>Alta De Atenci&oacute;n Medica</h3></center>
                <br>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="id_hospital">Hospital</label>
                    <select class="form-select" id="id_hospital" name="id_hospital">
                        <option selected>Selecciona una opción...</option>
                        @foreach($hospital as $item)
                             <option value="{{ $item->id_hospital }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="id_medico">M&eacute;dico</label>
                    <select class="form-select" id="id_medico" name="id_medico">
                        <option selected>Selecciona una opción...</option>
                        @foreach($medico as $item)
                             <option value="{{ $item->id_medico }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="id_paciente">Paciente</label>
                    <select class="form-select" id="id_paciente" name="id_paciente">
                        <option selected>Selecciona una opción...</option>
                        @foreach($paciente as $item)
                             <option value="{{ $item->id_paciente }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="detalles">Detalles</label>
                    <textarea class="form-control" id="detalles" name="detalles" rows="4" placeholder="Escribe los detalles aquí..."></textarea>
                </div>
                <hr><br>

                <center><button type="submit" class="btn btn-outline-success">Guardar</button></center>
            </form>
            <br><br>
            <hr>
            <table class="table table-dark">
                <tr>
                    <th>#</th>
                    <th>DETALLES</th>
                    <th>HOSPITAL</th>
                    <th>DOCTOR</th>
                    <th>PACIENTE</th>
                    <th> </th>
                </tr>
                @foreach($asignaciones as $asignacion)
                <tr>
                    <td>{{ $asignacion->id_atencion }}</td>
                    <td>{{ $asignacion->detalles }}</td>
                    <td>{{ $asignacion->AgHospital?->nombre }}</td>
                    <td>{{ $asignacion->AgMedico?->nombre }}</td>
                    <td>{{ $asignacion->AgPaciente?->nombre }}</td>
                    <td>
                        <a href="{{ route('asignacion_borrar', ['id' => $asignacion->id_atencion]) }}">
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Seguro que desea borrar el registro?')">
                                Borrar
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </main>
        @endsection
    </div>
</body>
</html>
