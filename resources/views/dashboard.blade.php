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
            padding: 10px;
        }
        .navbar-brand {
            color: white;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
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
            border: none;
            border-radius: 12px;
        }
        .card-body {
            text-align: center;
            padding: 30px 20px;
        }
        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .btn-logout {
            background-color: #dc3545;
            color: white;
            border-radius: 20px;
            padding: 8px 16px;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
        .transactions {
            display: none;
            margin-top: 20px;
        }
        .list-group-item {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> ¡Hola, bienvenido!
        </a>
        <div class="ml-auto">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout">Cerrar Sesión</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menú</h5>
                        <a href="#" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transacciones</h5>
                        <a href="#" class="btn btn-primary" id="show-transactions">Ver Movimientos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Saldo Actualmente</h5>
                        <a href="#" class="btn btn-primary">Consultar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección para mostrar las transacciones -->
        <div class="transactions" id="transactions-section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Historial de Transacciones</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Fecha:</strong> 20/10/2024 <br>
                            <strong>Hora:</strong> 14:35 <br>
                            <strong>Lugar:</strong> Alterios <br>
                            <strong>Valor:</strong> $100,000
                        </li>
                        <li class="list-group-item">
                            <strong>Fecha:</strong> 20/10/2024 <br>
                            <strong>Hora:</strong> 09:12 <br>
                            <strong>Lugar:</strong> Alterios <br>
                            <strong>Valor:</strong> $20,000
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2025 BancApp. Todos los derechos reservados.</p>
        </div>
    </div>

    <script>
        // JavaScript para mostrar las transacciones
        document.getElementById('show-transactions').addEventListener('click', function(event) {
            event.preventDefault();
            var transactions = document.getElementById('transactions-section');
            transactions.style.display = transactions.style.display === "none" ? "block" : "none";
        });
    </script>
</body>
</html>
