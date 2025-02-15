@extends('layouts.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 20px; border: none;">
        <h2 class="text-center mb-4" style="font-weight: 600; color: #333;">Iniciar sesión</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email" class="font-weight-bold">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Correo electrónico"
                       style="border-radius: 10px; padding: 12px; background-color: #f5f5f7;">
            </div>

            <div class="form-group">
                <label for="password" class="font-weight-bold">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña"
                       style="border-radius: 10px; padding: 12px; background-color: #f5f5f7;">
            </div>

            <button type="submit" class="btn btn-dark btn-block mt-3"
                    style="border-radius: 10px; padding: 12px; font-size: 16px; font-weight: 600;">
                Iniciar sesión
            </button>

            <p class="text-center mt-3">
                ¿No tienes una cuenta? <a href="{{ url('/register') }}" class="text-primary font-weight-bold">Regístrate</a>
            </p>
        </form>
    </div>
</div>
@endsection
