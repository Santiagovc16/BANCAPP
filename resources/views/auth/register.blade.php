<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate en BancApp</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"> <!-- Añadir fuente Montserrat -->
    <style>
        body {
            background-color: #e7f0ff; /* Color de fondo azul claro */
            font-family: 'Montserrat', sans-serif; /* Aplicar la fuente Montserrat */
        }
        .container {
            max-width: 400px; /* Ancho máximo del contenedor */
            margin-top: 80px; /* Espacio superior */
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra más pronunciada */
            transition: transform 0.2s; /* Transición para efecto hover */
        }
        .container:hover {
            transform: translateY(-5px); /* Efecto de levantamiento al pasar el mouse */
        }
        .error-message {
            color: red;
        }
        .logo {
            max-width: 150px; /* Ajusta el ancho máximo según sea necesario */
            height: auto; /* Mantiene la proporción */
            margin-bottom: 20px; /* Espacio inferior */
            display: block; /* Permite centrar con margin auto */
            margin-left: auto; /* Centrado horizontal */
            margin-right: auto; /* Centrado horizontal */
        }
        input.form-control {
            border-radius: 5px; /* Bordes redondeados en inputs */
            transition: border-color 0.3s; /* Transición para el borde */
            background-color: #f0f8ff; /* Color de fondo suave para inputs */
        }
        input.form-control:focus {
            border-color: #007BFF; /* Color del borde al enfocarse */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra al enfocarse */
            background-color: #e8f4ff; /* Color más claro al enfocar */
        }
        .btn-primary {
            background-color: #0056b3; /* Color azul oscuro para el botón */
            border: none;
            transition: background-color 0.3s, box-shadow 0.3s; /* Transición para color y sombra */
            font-weight: 700; /* Peso de fuente para el botón */
        }
        .btn-primary:hover {
            background-color: #004494; /* Azul más oscuro al pasar el mouse */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra al pasar el mouse */
        }
        .info-message {
            margin-top: 20px;
            text-align: center;
            color: #333; /* Color del texto */
        }
        h1 {
            font-weight: 700; /* Peso de fuente para el título */
            font-size: 1.8rem; /* Tamaño de fuente para el título */
            color: #0056b3; /* Color azul oscuro para el título */
        }
        label {
            font-weight: 600; /* Peso de fuente para las etiquetas */
            color: #333; /* Color del texto de las etiquetas */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h1 class="text-center">Regístrate en BancApp</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
        <div class="mt-4">
    <label for="rol" class="block font-medium text-sm text-gray-700">Rol</label>
    <select id="rol" name="rol" class="form-input rounded-md shadow-sm mt-1 block w-full">
        <option value="usuario">Usuario</option>
        <option value="administrador">Administrador</option>
    </select>
</div>

        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="info-message">
            ¿Ya estás registrado? <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
