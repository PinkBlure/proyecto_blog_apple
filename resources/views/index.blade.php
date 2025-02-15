@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">
        @if(Request::is('/'))
        Últimas Noticias
        @else
        {{ ucfirst(str_replace('%20', ' ', request()->segment(3))) }}
        @endif
    </h1>


    @if(count($posts) > 0)
    <div id="posts-container">
        @foreach($posts as $post)
        <div class="post card mb-4 shadow-sm rounded">
            <div class="card-body">
                <h2 class="card-title text-dark">{{ $post['title'] }}</h2>
                <p class="card-text text-muted"><strong>Tipo:</strong> {{ $post['type'] }}</p>
                <p class="card-text text-dark">{{ \Illuminate\Support\Str::limit($post['body'], 150) }}</p>
                <a href="{{ url('post/'.$post['id']) }}" class="btn btn-outline-primary mt-3">Leer más</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            @if ($current_page > 1)
            <li class="page-item"><a class="page-link" href="{{ url()->current() . '?page=' . ($current_page - 1) }}">Anterior</a></li>
            @endif

            @for ($i = 1; $i <= $last_page; $i++)
                <li class="page-item {{ $i == $current_page ? 'active' : '' }}">
                <a class="page-link" href="{{ url()->current() . '?page=' . $i }}">{{ $i }}</a>
                </li>
                @endfor

                @if ($current_page < $last_page)
                    <li class="page-item"><a class="page-link" href="{{ url()->current() . '?page=' . ($current_page + 1) }}">Siguiente</a></li>
                    @endif
        </ul>
    </div>
    @else
    <p class="text-center text-muted">No se encontraron publicaciones de este tipo.</p>
    @endif
</div>
@endsection
