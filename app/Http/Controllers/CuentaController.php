<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    public function index()
    {
        // Obtener las cuentas del usuario autenticado
        $cuentas = Cuenta::where('user_id', auth()->id())->get();

        // Retornar la vista con los datos de las cuentas
        return view('cuentas.index', compact('cuentas'));
    }

    public function depositar(Request $request, $id)
    {
        // Buscar la cuenta por su ID
        $cuenta = Cuenta::findOrFail($id);

        // Validar la solicitud
        $request->validate([
            'monto' => 'required|numeric|min:0.01'
        ]);

        // Aumentar el saldo de la cuenta con el monto ingresado
        $cuenta->saldo += $request->input('monto');
        $cuenta->save();

        // Redirigir a la página de cuentas con un mensaje de éxito
        return redirect()->route('cuentas.index')->with('success', 'Depósito realizado exitosamente.');
    }

    public function retirar(Request $request, $id)
    {
        // Buscar la cuenta por su ID
        $cuenta = Cuenta::findOrFail($id);

        // Validar la solicitud
        $request->validate([
            'monto' => 'required|numeric|min:0.01'
        ]);

        // Comprobar si hay fondos suficientes para el retiro
        if ($cuenta->saldo < $request->input('monto')) {
            return redirect()->route('cuentas.index')->with('error', 'Fondos insuficientes para realizar el retiro.');
        }

        // Disminuir el saldo de la cuenta con el monto ingresado
        $cuenta->saldo -= $request->input('monto');
        $cuenta->save();

        // Redirigir a la página de cuentas con un mensaje de éxito
        return redirect()->route('cuentas.index')->with('success', 'Retiro realizado exitosamente.');
    }
}
