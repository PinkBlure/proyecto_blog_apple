@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Noticias</h1>

    @if(count($posts['data']) > 0)
        <div id="posts-container">
            @foreach($posts['data'] as $post)
                <div class="post">
                    <h2>{{ $post['title'] }}</h2>
                    <p><strong>Tipo:</strong> {{ $post['type'] }}</p>
                    <p>{{ \Illuminate\Support\Str::limit($post['body'], 100) }}</p>
                    <hr>
                </div>
            @endforeach
        </div>
    @else
        <p>No se encontraron publicaciones de este tipo.</p>
    @endif
</div>
@endsection
