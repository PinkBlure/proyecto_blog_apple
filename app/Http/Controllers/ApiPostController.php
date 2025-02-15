<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiPostController extends Controller
{
    // Obtener todas las entradas
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data' => $posts,
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
        ]);

        $slug = Str::slug($request->title);

        $post = Post::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
        ]);

        return response()->json([
            'data' => $post,
            'message' => 'Post creado exitosamente'
        ], 201);
    }
}
