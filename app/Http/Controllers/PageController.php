<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function apiDocumentation()
    {
        return view('api.documentation');
    }
}
