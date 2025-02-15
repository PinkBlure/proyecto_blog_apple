@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <!-- Título de la publicación -->
            <h1 class="text-center text-dark mb-4" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-weight: 600; font-size: 2.5rem;">{{ $post['title'] }}</h1>

            <!-- Tipo de publicación -->
            <p class="text-center text-muted" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 1.125rem;">
                <strong>Tipo:</strong> {{ $post['type'] }}
            </p>

            <!-- Contenido de la publicación -->
            <div class="mt-4" style="line-height: 1.75; color: #333; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 1.125rem;">
                <p>{{ $post['body'] }}</p>
            </div>

            <!-- Botón Volver -->
            <div class="d-flex justify-content-center mt-5">
                <a href="{{ url('/') }}" class="btn btn-outline-dark btn-lg px-4 py-2" style="font-size: 1.125rem; border-radius: 30px; font-weight: 600; text-transform: uppercase;">
                    Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
