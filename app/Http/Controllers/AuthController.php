<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Realizar login (verificar usuario y establecer cookie)
    public function login(Request $request)
    {
        // Valida que el correo y la contraseña sean correctos
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            // Si la autenticación es exitosa, creamos la cookie
            Cookie::queue(Cookie::make('user_session', $user->id, 60)); // Guarda la cookie por 60 minutos
            return redirect()->route('admin');
        } else {
            return back()->with('error', 'Credenciales incorrectas');
        }
    }

    // Realizar logout (eliminar cookie)
    public function logout()
    {
        Cookie::queue(Cookie::forget('user_session'));
        return redirect('/');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Cookie::queue(Cookie::make('user_session', $user->id, 60 * 24)); // Guarda la cookie por 24 horas

        return redirect()->route('admin');
    }
}
