<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
            background-color: #007BFF;
        }
        .navbar-brand {
            color: white;
            font-weight: 600;
        }
        .nav-item a {
            color: white;
            font-weight: 500;
        }
        .nav-item a:hover {
            color: #d1e7ff;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            text-align: center;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #6c757d;
        }
        .btn-logout {
            background-color: #dc3545;
            color: white;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">¡Hola, bienvenido!</a>
        <div class="ml-auto">
            <!-- Formulario para cerrar sesión -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout">Cerrar Sesión</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inicio</h5>
                        <a href="#" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menú</h5>
                        <a href="#" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transacciones</h5>
                        <a href="#" class="btn btn-primary">Ver Movimientos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Saldo Actualmente</h5>
                        <a href="#" class="btn btn-primary">Consultar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 BancApp. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
