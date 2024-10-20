<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #e7f0ff;
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 400px;
            margin-top: 80px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        .logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        input.form-control {
            border-radius: 5px;
            background-color: #f0f8ff;
        }
        input.form-control:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #e8f4ff;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
            transition: background-color 0.3s, box-shadow 0.3s;
            font-weight: 700;
        }
        .btn-primary:hover {
            background-color: #004494;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        .info-message {
            margin-top: 20px;
            text-align: center;
        }
        h1 {
            font-weight: 700;
            font-size: 1.8rem;
            color: #0056b3;
        }
        label {
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h1 class="text-center">Entra a tu BancApp</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </form>

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
            ¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
        </div>
    </div>
</body>
</html>
