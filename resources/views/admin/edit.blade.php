@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">Editar Post</h1>

    <form action="{{ route('admin.update', $post['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Título -->
        <div class="mb-4">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control form-control-lg shadow-sm" id="title" name="title" value="{{ $post['title'] }}" required>
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control form-control-lg shadow-sm" id="slug" name="slug" value="{{ $post['slug'] }}" required>
        </div>

        <!-- Cuerpo -->
        <div class="mb-4">
            <label for="body" class="form-label">Cuerpo</label>
            <textarea class="form-control form-control-lg shadow-sm" id="body" name="body" rows="6" required>{{ $post['body'] }}</textarea>
        </div>

        <!-- Tipo -->
        <div class="mb-4">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select form-select-lg shadow-sm" id="type" name="type" required>
                <option value="Reseñas de productos" {{ $post['type'] == 'Reseñas de productos' ? 'selected' : '' }}>Reseñas de productos</option>
                <option value="Noticias de Apple" {{ $post['type'] == 'Noticias de Apple' ? 'selected' : '' }}>Noticias de Apple</option>
                <option value="Consejos y trucos" {{ $post['type'] == 'Consejos y trucos' ? 'selected' : '' }}>Consejos y trucos</option>
                <option value="Comparativas" {{ $post['type'] == 'Comparativas' ? 'selected' : '' }}>Comparativas</option>
                <option value="Tutoriales" {{ $post['type'] == 'Tutoriales' ? 'selected' : '' }}>Tutoriales</option>
                <option value="Accesorios Apple" {{ $post['type'] == 'Accesorios Apple' ? 'selected' : '' }}>Accesorios Apple</option>
                <option value="Apple en el trabajo y productividad" {{ $post['type'] == 'Apple en el trabajo y productividad' ? 'selected' : '' }}>Apple en el trabajo y productividad</option>
            </select>
        </div>

        <!-- Botón de Actualización -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg shadow-sm">Actualizar Post</button>
        </div>
    </form>
</div>
@endsection
