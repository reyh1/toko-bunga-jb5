<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Post;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(4);

        return view('home.index', compact('posts'));
    }
    public function show(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('home.show', compact('post'));
    }
}
