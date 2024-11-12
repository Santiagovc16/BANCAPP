@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Cuentas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Número de Cuenta</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuentas as $cuenta)
                <tr>
                    <td>{{ $cuenta->numero_cuenta }}</td>
                    <td>${{ number_format($cuenta->saldo, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
