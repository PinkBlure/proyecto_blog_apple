@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Documentación de la API del Blog</h1>
    <p>Esta es la documentación para interactuar con la API RESTful del blog. A continuación se describen los endpoints disponibles, ejemplos de solicitudes y respuestas.</p>

    <h2>Rutas de la API</h2>
    <h3>Obtener todos los posts</h3>
    <p><strong>Ruta:</strong> <code>/api/posts</code></p>
    <p><strong>Método:</strong> GET</p>
    <p><strong>Descripción:</strong> Obtiene una lista de todos los posts publicados en el blog.</p>
    <pre>
    <code>
    GET /api/posts HTTP/1.1
    Host: tu-dominio.com
    </code>
    </pre>
    <p><strong>Respuesta:</strong> Lista de todos los posts en formato JSON.</p>
    <pre>
    <code>
    {
        "data": [
            {
                "id": 1,
                "title": "Reseña del nuevo iPhone 15",
                "slug": "reseña-del-nuevo-iphone-15",
                "body": "Este es un análisis detallado sobre las características del nuevo iPhone 15.",
                "type": "Reseñas de productos"
            },
            {
                "id": 2,
                "title": "Novedades de Apple para 2025",
                "slug": "novedades-de-apple-para-2025",
                "body": "Apple planea lanzar nuevas tecnologías en el año 2025.",
                "type": "Noticias de Apple"
            }
        ],
        "message": "Succeed"
    }
    </code>
    </pre>

    <h3>Obtener un post por ID</h3>
    <p><strong>Ruta:</strong> <code>/api/posts/{id}</code></p>
    <p><strong>Método:</strong> GET</p>
    <p><strong>Descripción:</strong> Obtiene los detalles de un post específico por su ID.</p>
    <pre>
    <code>
    GET /api/posts/1 HTTP/1.1
    Host: tu-dominio.com
    </code>
    </pre>
    <p><strong>Respuesta:</strong> El post solicitado en formato JSON.</p>
    <pre>
    <code>
    {
        "data": {
            "id": 1,
            "title": "Reseña del nuevo iPhone 15",
            "slug": "reseña-del-nuevo-iphone-15",
            "body": "Este es un análisis detallado sobre las características del nuevo iPhone 15.",
            "type": "Reseñas de productos"
        },
        "message": "Succeed"
    }
    </code>
    </pre>

    <h3>Crear un nuevo post</h3>
    <p><strong>Ruta:</strong> <code>/api/posts</code></p>
    <p><strong>Método:</strong> POST</p>
    <p><strong>Descripción:</strong> Crea un nuevo post en el blog.</p>
    <p><strong>Parámetros:</strong> JSON con los campos <code>title</code> y <code>body</code>.</p>
    <pre>
    <code>
    POST /api/posts HTTP/1.1
    Host: tu-dominio.com
    Content-Type: application/json

    {
        "title": "Nuevo post de ejemplo",
        "body": "Este es un cuerpo de ejemplo para el post."
    }
    </code>
    </pre>
    <p><strong>Respuesta:</strong> El post creado con los datos en formato JSON.</p>
    <pre>
    <code>
    {
        "data": {
            "id": 3,
            "title": "Nuevo post de ejemplo",
            "slug": "nuevo-post-de-ejemplo",
            "body": "Este es un cuerpo de ejemplo para el post.",
            "type": "Reseñas de productos"
        },
        "message": "Post creado exitosamente"
    }
    </code>
    </pre>

    <h3>Obtener posts por tipo</h3>
    <p><strong>Ruta:</strong> <code>/api/posts/type/{type}</code></p>
    <p><strong>Método:</strong> GET</p>
    <p><strong>Descripción:</strong> Obtiene los posts filtrados por tipo.</p>
    <pre>
    <code>
    GET /api/posts/type/Reseñas%20de%20productos HTTP/1.1
    Host: tu-dominio.com
    </code>
    </pre>
    <p><strong>Respuesta:</strong> Lista de posts filtrados por tipo.</p>
    <pre>
    <code>
    {
        "data": [
            {
                "id": 1,
                "title": "Reseña del nuevo iPhone 15",
                "slug": "reseña-del-nuevo-iphone-15",
                "body": "Este es un análisis detallado sobre las características del nuevo iPhone 15.",
                "type": "Reseñas de productos"
            }
        ],
        "message": "Succeed"
    }
    </code>
    </pre>

</div>
@endsection
