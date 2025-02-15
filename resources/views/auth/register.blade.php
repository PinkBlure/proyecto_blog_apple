@extends('layouts.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 20px; border: none;">
    <h2 class="text-center mb-4" style="font-weight: 600; color: #333;">Crear Cuenta</h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name" class="font-weight-bold">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required autofocus style="border-radius: 10px; padding: 10px;">
      </div>

      <div class="form-group">
        <label for="email" class="font-weight-bold">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required style="border-radius: 10px; padding: 10px;">
      </div>

      <div class="form-group">
        <label for="password" class="font-weight-bold">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required style="border-radius: 10px; padding: 10px;">
        @if ($errors->has('password'))
        <div class="text-danger mt-1">{{ $errors->first('password') }}</div>
        @endif

      </div>

      <div class="form-group">
        <label for="password_confirmation" class="font-weight-bold">Confirmar contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required style="border-radius: 10px; padding: 10px;">
      </div>

      <button type="submit" class="btn btn-dark btn-block mt-3" style="border-radius: 10px; padding: 12px; font-size: 16px;">
        Registrarse
      </button>

      <p class="text-center mt-3">
        ¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary font-weight-bold">Inicia sesión</a>
      </p>
    </form>
  </div>
</div>
@endsection