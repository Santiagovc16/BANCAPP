@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Historial de Transferencias</h2>

    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Transacciones Realizadas</h3>

        <!-- Contenedor de historial de transferencias -->
        <ul id="historial-lista" class="list-disc pl-6 space-y-3 text-gray-700">
            <!-- Las transferencias se cargarán aquí desde el almacenamiento de sesión -->
        </ul>
    </div>
</div>

<script>
    // Cargar el historial de transferencias desde sessionStorage y mostrarlo
    document.addEventListener('DOMContentLoaded', function() {
        const historialLista = document.getElementById('historial-lista');
        const historial = JSON.parse(sessionStorage.getItem('historialTransferencias')) || [];

        if (historial.length === 0) {
            historialLista.innerHTML = '<li class="text-gray-600">No hay transferencias registradas.</li>';
        } else {
            historial.forEach(transferencia => {
                const item = document.createElement('li');
                item.innerHTML = `<strong>Fecha:</strong> ${transferencia.fecha}, 
                                  <strong>Monto:</strong> $${parseFloat(transferencia.monto).toFixed(2)}, 
                                  <strong>Cuenta Destino:</strong> ${transferencia.cuenta}`;
                historialLista.appendChild(item);
            });
        }
    });
</script>
@endsection
