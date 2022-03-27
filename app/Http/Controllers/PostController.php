<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        if (request()->has('category')) {
            $title = "Posts in " . request()->category;
        } else if (request()->has('author')) {
            $title = "Posts by " . User::where('username', request()->author)->get()->first()->name;
        } else {
            $title = "All Posts";
        }
        return view('posts.index', [
            "title" => $title,
            "where" => "posts",
            "result" => Post::filter(
                request(['search', 'category', 'author'])
            )->count(),
            "blogs" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(20)->withQueryString()
        ]);
    }


    public function single(Post $post)
    {
        // $blog = Post::where('slug', $post)->get()->first();
        return view('posts.single', [
            "title" => $post->title,
            "where" => "posts",
            "blog" => $post
        ]);
    }
}
