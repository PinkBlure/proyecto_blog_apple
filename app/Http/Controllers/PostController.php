<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/posts/');

        // Verificamos si la respuesta fue exitosa
        if ($response->successful()) {
            // Obtener los datos de la respuesta
            $posts = $response->json(); // Esto devolverá un array de posts.
        } else {
            // Si la solicitud no es exitosa, pasamos un arreglo vacío
            $posts = [];
        }

        // Pasamos los posts a la vista 'posts.index'
        return view('index', compact('posts'));
    }
}
