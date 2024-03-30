<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get(); // Mengambil semua postingan terbaru
        return view('home', [ // Mengirim data postingan ke view home
            "title" => "All Posts",
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
    public function indexByCategory($category)
    {
        // Anggap Anda memiliki model Category dengan atribut slug
        $category = Category::where('slug', $category)->firstOrFail();
        
        $posts = Post::where('category_id', $category->id)->latest()->get();

        return view('detail', [
            'posts' => $posts,
            'category' => $category,
        ]);
    }
}
