@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Mis Cuentas</h1>
    <table class="table-auto w-full bg-white shadow-md rounded my-6">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="w-1/3 px-4 py-2">Número de Cuenta</th>
                <th class="w-1/3 px-4 py-2">Saldo</th>
                <th class="w-1/3 px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuentas as $cuenta)
                <tr>
                    <td class="border px-4 py-2">{{ $cuenta->numero_cuenta }}</td>
                    <td class="border px-4 py-2">${{ number_format($cuenta->saldo, 2) }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('cuentas.depositar', $cuenta->id) }}" method="POST" class="inline-block">
                            @csrf
                            <input type="number" name="monto" step="0.01" placeholder="Monto a depositar" class="p-1 border rounded">
                            <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded">Depositar</button>
                        </form>

                        <form action="{{ route('cuentas.retirar', $cuenta->id) }}" method="POST" class="inline-block ml-4">
                            @csrf
                            <input type="number" name="monto" step="0.01" placeholder="Monto a retirar" class="p-1 border rounded">
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded">Retirar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
