<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiPostController extends Controller
{
    // Obtener todas las entradas con paginación
    public function index()
    {
        // Cambia '10' por el número de posts por página que desees
        $posts = Post::paginate(3);

        return response()->json([
            'data' => $posts->items(), // Se pasan solo los items de la página actual
            'current_page' => $posts->currentPage(),
            'last_page' => $posts->lastPage(),
            'per_page' => $posts->perPage(),
            'total' => $posts->total(),
            'message' => 'Succeed'
        ], 200);
    }

    // Obtener una entrada específica por ID
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'data' => [],
                'message' => 'Entrada no encontrada'
            ], 404);
        }

        return response()->json([
            'data' => $post,
            'message' => 'Succeed'
        ], 200);
    }

    // Crear una nueva entrada
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'type' => 'required|in:Reseñas de productos,Noticias de Apple,Consejos y trucos,Comparativas,Tutoriales,Accesorios Apple,Apple en el trabajo y productividad',
        ]);

        $slug = Str::slug($request->title);

        $post = Post::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
            'type' => $validated['type'],
        ]);

        return response()->json([
            'data' => $post,
            'message' => 'Post creado exitosamente'
        ], 201);
    }

    public function getPostsByType($type)
    {
        $posts = Post::where('type', $type)->paginate(3);  // Paginación por tipo

        if ($posts->isEmpty()) {
            return response()->json(['message' => 'No posts found for this type.'], 404);
        }

        return response()->json($posts);
    }
}
