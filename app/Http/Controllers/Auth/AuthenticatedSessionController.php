<?php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Vista del login
    }

    public function store(Request $request)
    {
        // Validar credenciales
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticación
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerar sesión al autenticar
            $request->session()->regenerate();

            // Redirigir al dashboard después del login exitoso
            return redirect()->intended('dashboard');
        }

        // Si falla la autenticación, mostrar error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function destroy(Request $request)
    {
        // Cerrar sesión
        Auth::logout();

        // Invalida y regenera el token de la sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al login o página principal
        return redirect('/');
    }
}
