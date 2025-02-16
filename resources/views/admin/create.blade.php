@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4" style="font-weight: 600; color: #333; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', Arial, sans-serif;">
            Crear Nuevo Post
        </h1>

        @if(session('error'))
            <div class="alert alert-danger" style="border-radius: 12px; background-color: #FF4C4C; color: white;">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success" style="border-radius: 12px; background-color: #4CAF50; color: white;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('storePost') }}" method="POST" style="max-width: 600px; margin: auto; background: #f9f9f9; border-radius: 15px; padding: 30px 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            @csrf
            <div class="form-group">
                <label for="title" class="font-weight-bold" style="font-size: 18px; color: #333;">Título</label>
                <input type="text" class="form-control" id="title" name="title" required style="border-radius: 10px; padding: 12px; border: 1px solid #ddd; font-size: 16px; transition: all 0.3s;">
                <small style="font-size: 14px; color: #666;">Escribe el título del post</small>
            </div>

            <div class="form-group mt-4">
                <label for="body" class="font-weight-bold" style="font-size: 18px; color: #333;">Contenido</label>
                <textarea class="form-control" id="body" name="body" required rows="6" style="border-radius: 10px; padding: 12px; border: 1px solid #ddd; font-size: 16px; transition: all 0.3s;"></textarea>
                <small style="font-size: 14px; color: #666;">Escribe el contenido de tu post aquí</small>
            </div>

            <div class="form-group mt-4">
                <label for="type" class="font-weight-bold" style="font-size: 18px; color: #333;">Tipo de post</label>
                <select class="form-control" id="type" name="type" required style="border-radius: 10px; padding: 12px; border: 1px solid #ddd; font-size: 16px; background-color: #fff; color: #333; height: 50px; line-height: 20px; transition: all 0.3s;">
                    <option value="Reseñas de productos">Reseñas de productos</option>
                    <option value="Noticias de Apple">Noticias de Apple</option>
                    <option value="Consejos y trucos">Consejos y trucos</option>
                    <option value="Comparativas">Comparativas</option>
                    <option value="Tutoriales">Tutoriales</option>
                    <option value="Accesorios Apple">Accesorios Apple</option>
                    <option value="Apple en el trabajo y productividad">Apple en el trabajo y productividad</option>
                </select>
                <small style="font-size: 14px; color: #666;">Selecciona el tipo de contenido</small>
            </div>

            <button type="submit" class="btn btn-dark btn-block mt-4" style="border-radius: 20px; padding: 14px; font-size: 16px; background: linear-gradient(90deg, #333, #555); transition: all 0.3s;">
                Crear Post
            </button>
        </form>
    </div>
</div>

@endsection
