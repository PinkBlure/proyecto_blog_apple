@extends('layouts.layout')

@section('content')
<div class="container">
    <header class="documentation-header">
        <h1 class="page-title">Documentación de la API RESTful del Blog</h1>
        <p class="lead-text">Bienvenido a la documentación oficial de la API del blog. Aquí podrás encontrar toda la información necesaria para interactuar con nuestra API RESTful, con ejemplos claros y detallados para cada uno de los endpoints disponibles.</p>
    </header>

    <section>
        <h2 class="section-title">Rutas de la API</h2>
        
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-list-alt"></i> Obtener todos los posts</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts</code></p>
                <p><strong>Método:</strong> <span class="badge badge-success">GET</span></p>
                <p><strong>Descripción:</strong> Obtén una lista completa de todos los posts publicados en el blog, con soporte para paginación.</p>
                <p><strong>Paginación:</strong> Este endpoint admite un parámetro <code>page</code> para especificar la página solicitada. Por defecto, se devuelven 3 posts por página, pero puedes ajustar el número de resultados por página a tu gusto.</p>
                <pre><code>GET /api/posts?page=2 HTTP/1.1<br>Host: tu-dominio.com</code></pre>
                <p><strong>Respuesta:</strong> Lista de posts con los detalles y paginación.</p>
                <pre><code>
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
    "message": "Succeed",
    "pagination": {
        "current_page": 2,
        "total_pages": 5,
        "per_page": 10,
        "total_count": 50
    }
}
                </code></pre>
            </div>
        </div>

        <!-- Endpoint 2: Obtener un post por ID -->
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-info-circle"></i> Obtener un post por ID</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts/{id}</code></p>
                <p><strong>Método:</strong> <span class="badge badge-info">GET</span></p>
                <p><strong>Descripción:</strong> Obtén los detalles de un post específico utilizando su ID.</p>
                <pre><code>GET /api/posts/1 HTTP/1.1<br>Host: tu-dominio.com</code></pre>
                <p><strong>Respuesta:</strong> Detalles del post solicitado.</p>
                <pre><code>
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
                </code></pre>
            </div>
        </div>

        <!-- Endpoint 3: Crear un nuevo post -->
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-pencil-alt"></i> Crear un nuevo post</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts</code></p>
                <p><strong>Método:</strong> <span class="badge badge-primary">POST</span></p>
                <p><strong>Descripción:</strong> Crea un nuevo post en el blog proporcionando los campos necesarios como <code>title</code> y <code>body</code>.</p>
                <pre><code>POST /api/posts HTTP/1.1<br>Host: tu-dominio.com<br>Content-Type: application/json

{
    "title": "Nuevo post de ejemplo",
    "body": "Este es un cuerpo de ejemplo para el post."
}
                </code></pre>
                <p><strong>Respuesta:</strong> El post recién creado, con los datos en formato JSON.</p>
                <pre><code>
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
                </code></pre>
            </div>
        </div>

        <!-- Endpoint 4: Obtener posts por tipo -->
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-filter"></i> Obtener posts por tipo</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts/type/{type}</code></p>
                <p><strong>Método:</strong> <span class="badge badge-warning">GET</span></p>
                <p><strong>Descripción:</strong> Obtén los posts filtrados por tipo, como "Reseñas de productos" o "Noticias de Apple".</p>
                <p><strong>Paginación:</strong> Al igual que con el endpoint de todos los posts, puedes usar el parámetro <code>page</code> para obtener posts de una página específica.</p>
                <pre><code>GET /api/posts/type/Reseñas%20de%20productos?page=1 HTTP/1.1<br>Host: tu-dominio.com</code></pre>
                <p><strong>Respuesta:</strong> Lista de posts por tipo, con información de paginación.</p>
                <pre><code>
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
    "message": "Succeed",
    "pagination": {
        "current_page": 1,
        "total_pages": 3,
        "per_page": 10,
        "total_count": 30
    }
}
                </code></pre>
            </div>
        </div>

        <!-- Endpoint 5: Actualizar un post -->
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-sync-alt"></i> Actualizar un post</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts/{id}</code></p>
                <p><strong>Método:</strong> <span class="badge badge-secondary">PUT</span></p>
                <p><strong>Descripción:</strong> Actualiza un post existente con nuevos valores para los campos <code>title</code>, <code>slug</code>, <code>body</code> y <code>type</code>.</p>
                <pre><code>PUT /api/posts/1 HTTP/1.1<br>Host: tu-dominio.com<br>Content-Type: application/json

{
    "title": "Reseña del nuevo iPhone 15 Actualizada",
    "slug": "reseña-del-nuevo-iphone-15-actualizada",
    "body": "Este es un análisis detallado sobre las características del nuevo iPhone 15 actualizado.",
    "type": "Reseñas de productos"
}
                </code></pre>
                <p><strong>Respuesta:</strong> El post actualizado con los datos nuevos en formato JSON.</p>
                <pre><code>
{
    "message": "Post actualizado con éxito",
    "post": {
        "id": 1,
        "title": "Reseña del nuevo iPhone 15 Actualizada",
        "slug": "reseña-del-nuevo-iphone-15-actualizada",
        "body": "Este es un análisis detallado sobre las características del nuevo iPhone 15 actualizado.",
        "type": "Reseñas de productos"
    }
}
                </code></pre>
            </div>
        </div>

        <!-- Endpoint 6: Eliminar un post -->
        <div class="api-endpoint card">
            <h3 class="endpoint-title"><i class="fa fa-trash-alt"></i> Eliminar un post</h3>
            <div class="endpoint-details">
                <p><strong>Ruta:</strong> <code>/api/posts/{id}</code></p>
                <p><strong>Método:</strong> <span class="badge badge-danger">DELETE</span></p>
                <p><strong>Descripción:</strong> Elimina un post específico por su ID.</p>
                <pre><code>DELETE /api/posts/1 HTTP/1.1<br>Host: tu-dominio.com</code></pre>
                <p><strong>Respuesta:</strong> Un mensaje confirmando la eliminación del post.</p>
                <pre><code>
{
    "message": "Post eliminado exitosamente"
}
                </code></pre>
            </div>
        </div>

    </section>
</div>
@endsection

<style>
    .documentation-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .page-title {
        font-size: 2.5em;
        color: #333;
    }

    .lead-text {
        font-size: 1.1em;
        color: #777;
        margin-top: 20px;
    }

    .section-title {
        font-size: 2em;
        color: #2c3e50;
        margin-bottom: 40px;
    }

    .api-endpoint {
        background: #f9f9f9;
        border-radius: 8px;
        margin-bottom: 30px;
        padding: 20px;
    }

    .api-endpoint .endpoint-title {
        font-size: 1.5em;
        color: #333;
        display: flex;
        align-items: center;
    }

    .api-endpoint .endpoint-title i {
        margin-right: 10px;
        font-size: 1.3em;
        color: #3498db;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 12px;
        font-size: 0.9em;
    }

    .badge-success {
        background-color: #2ecc71;
        color: white;
    }

    .badge-info {
        background-color: #3498db;
        color: white;
    }

    .badge-primary {
        background-color: #2980b9;
        color: white;
    }

    .badge-warning {
        background-color: #f39c12;
        color: white;
    }

    .badge-secondary {
        background-color: #95a5a6;
        color: white;
    }

    .badge-danger {
        background-color: #e74c3c;
        color: white;
    }

    pre {
        background-color: #f4f4f4;
        padding: 10px;
        border-radius: 8px;
        overflow-x: auto;
    }

    code {
        font-size: 0.95em;
        color: #333;
    }
</style>
