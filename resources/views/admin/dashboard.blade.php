@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4" style="font-weight: 600; color: #333; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', Arial, sans-serif;">
            Bienvenido, {{ $user->name }}
        </h1>

        <p style="font-size: 18px; color: #666;">Este es tu panel de administrador.</p>

        <div class="mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark" style="
                    background: linear-gradient(to right, #333, #555);
                    border: none;
                    padding: 12px 24px;
                    font-size: 16px;
                    border-radius: 24px;
                    font-weight: 500;
                    transition: all 0.3s;
                " onmouseover="this.style.background='linear-gradient(to right, #222, #444)'"
                   onmouseout="this.style.background='linear-gradient(to right, #333, #555)'">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
