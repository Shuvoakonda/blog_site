<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show all posts on the home page
    public function index()
    {
        $posts = Post::with(['category', 'user'])->latest()->get();
        return view('home', compact('posts'));
    }

    // Show a single post
    public function show($id)
    {
        $post = Post::with(['category', 'user'])->findOrFail($id);
        return view('single-post', compact('post'));
    }
}
