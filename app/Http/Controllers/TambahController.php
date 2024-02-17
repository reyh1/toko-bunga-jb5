<?php

namespace App\Http\Controllers;

// Import model "Post"
use App\Models\Post;

// Import tipe return
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TambahController extends Controller
{
    // Method untuk menampilkan form tambah
    public function tambah(): View
    {
        // Mengembalikan view untuk form tambah post
        return view('posts.create');
    }
}
