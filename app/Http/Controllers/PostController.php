<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Obtenemos el número de página de los parámetros de la solicitud (default es 1)
        $page = $request->get('page', 1);

        // Realizamos la solicitud a la API con el número de página
        $response = Http::get('http://127.0.0.1:8000/api/posts', [
            'page' => $page  // Pasamos el número de página
        ]);

        // Verificamos si la respuesta fue exitosa
        if ($response->successful()) {
            // Obtener los datos de la respuesta
            $posts = $response->json(); // Esto devolverá un array de posts

            // Pasamos los datos de paginación y posts a la vista
            return view('index', [
                'posts' => $posts['data'],  // Los datos de las publicaciones
                'current_page' => $posts['current_page'],  // Página actual
                'last_page' => $posts['last_page'],  // Última página
                'total' => $posts['total'],  // Total de posts
                'per_page' => $posts['per_page'],  // Posts por página
            ]);
        } else {
            // Si la solicitud no es exitosa, pasamos un arreglo vacío
            return view('index', ['posts' => []]);
        }
    }

    public function showByType(Request $request, $type)
    {
        // Obtenemos el número de página de los parámetros de la solicitud (default es 1)
        $page = $request->get('page', 1);

        // Realizamos la solicitud a la API para obtener los posts por tipo
        $response = Http::get("http://127.0.0.1:8000/api/posts/type/{$type}", [
            'page' => $page  // Pasamos el número de página
        ]);

        // Verificamos si la respuesta fue exitosa
        if ($response->successful()) {
            // Obtener los datos de la respuesta
            $posts = $response->json();

            // Pasamos los datos de paginación y posts a la vista
            return view('index', [
                'posts' => $posts['data'],  // Los datos de las publicaciones
                'current_page' => $posts['current_page'],  // Página actual
                'last_page' => $posts['last_page'],  // Última página
                'total' => $posts['total'],  // Total de posts
                'per_page' => $posts['per_page'],  // Posts por página
            ]);
        } else {
            // Si la solicitud no es exitosa, pasamos un arreglo vacío
            return view('index', ['posts' => []]);
        }
    }

    public function show($id)
    {
        // Realizamos la solicitud a la API para obtener el detalle de la publicación
        $response = Http::get("http://127.0.0.1:8000/api/posts/{$id}");

        // Verificamos si la respuesta fue exitosa
        if ($response->successful()) {
            // Obtener los datos de la respuesta
            $post = $response->json();

            // Pasamos los datos de la publicación a la vista
            return view('show', [
                'post' => $post['data'],  // Los datos de la publicación
            ]);
        } else {
            // Si la solicitud no es exitosa, redirigimos a la página principal
            return redirect()->route('index')->with('error', 'Publicación no encontrada');
        }
    }

    public function create()
    {
        return view('admin.create'); // Vista donde los usuarios pueden crear un nuevo post
    }

    public function store(Request $request)
    {
        // Validamos los datos enviados
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'type' => 'required|in:Reseñas de productos,Noticias de Apple,Consejos y trucos,Comparativas,Tutoriales,Accesorios Apple,Apple en el trabajo y productividad',
        ]);

        // Realizamos la llamada a la API para crear el post
        $response = Http::post('http://127.0.0.1:8000/api/posts', [
            'title' => $validated['title'],
            'body' => $validated['body'],
            'type' => $validated['type'],
        ]);

        // Verificamos si la llamada fue exitosa
        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Post creado exitosamente');
        } else {
            // Si no es exitoso, verificamos el mensaje de error de la respuesta
            $errorMessage = $response->json()['message'] ?? 'Hubo un error al crear el post holi';  // Obtenemos el mensaje de error si existe
            return back()->with('error', $errorMessage);
        }
    }

    public function edit($id)
    {
        // Llamar a la API para obtener los datos del post
        $response = Http::get('http://127.0.0.1:8000/api/posts/' . $id); // Cambia la URL por la URL correcta de tu API

        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            $post = $response->json(); // Esta es la respuesta que viene desde la API

            // Pasar los datos a la vista
            return view('admin.edit', ['post' => $post['data']]); // Accedemos a los datos reales del post
        } else {
            // Si no se puede obtener el post, redirigir con un mensaje de error
            return redirect()->route('admin')->with('error', 'No se pudo encontrar el post.');
        }
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos del post
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required|string',
            'type' => 'required|string'
        ]);

        // Realizar la solicitud PUT a la API para actualizar el post
        $response = Http::put('http://127.0.0.1:8000/api/posts/' . $id, $validated); // Cambia la URL de tu API

        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Post actualizado con éxito');
        } else {
            return redirect()->route('admin.edit', $id)->with('error', 'No se pudo actualizar el post');
        }
    }

    public function destroy($id)
    {
        // Realiza la solicitud DELETE a la API para eliminar el post
        $response = Http::delete("http://127.0.0.1:8000/api/posts/{$id}");

        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Post eliminado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Hubo un problema al eliminar el post');
        }
    }
}
