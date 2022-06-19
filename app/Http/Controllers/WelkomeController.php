<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelkomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(4);
        return view('userSide.welkome', compact('posts'));
    }
}
