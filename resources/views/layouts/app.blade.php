<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/14030/14030331.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #212424;
            color: white;
        }
        .content {
            flex: 1;
            padding: 2rem;
        }
        footer {
            background-color: #212424;
            color:grey;
            padding: 1rem 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .table-dark {
            color: white;
            background-color: #343a40;
        }
        .form-select, .input-group-text, .form-control {
            background-color: #343a40;
            color: white;
            border: 1px solid #6c757d;
        }
        .form-select:focus, .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
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
        .transparent-input,
        .transparent-select,
        .transparent-file {
            background-color: transparent;
            border: 1px solid white; 
            color: white; 
        }
        .transparent-input::placeholder,
        .transparent-select::placeholder {
            color: white; 
            opacity: 0.7;
        }
        .transparent-file {
            padding: 0.375rem 0.75rem;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-grey">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">EX - HOSPITAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('asignacion') }}">Atenci&oacute;n</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hospitales') }}">Hospitales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('medicos') }}">M&eacute;dicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pacientes') }}">Pacientes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="text-grey">Hospital | Samuel Antonio Garduño Viviana DSM-43</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
