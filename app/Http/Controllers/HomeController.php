<?php
namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    // Show all posts on the home page
    public function index()
    {
        $posts = Post::with(['category', 'user'])->latest()->get();
        return view('home', compact('posts'));
    }

    // Show a single post
    public function show($slug)
    {
        $post = Post::with(['category', 'user'])->where('slug', $slug)->firstOrFail();
        return view('single-post', compact('post'));
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function author()
    {
        return view('author');
    }

}
