<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Mostrar el panel de administración
    public function index()
    {
        // Verifica si la cookie de sesión está presente
        $userId = Cookie::get('user_session');

        if ($userId) {
            $user = DB::table('users')->find($userId);
            return view('admin.dashboard', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }
}
