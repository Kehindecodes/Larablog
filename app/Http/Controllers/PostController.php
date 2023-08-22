<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //display all posts
    public function index()
    {
        // dd(Post::all());
        return view(
            'posts.index',
            [
                'posts' => Post::all()
            ]
        );
    }
    // show a single post
    public function show(Post $post)

    {
        return view('posts.post', [
            'post' => $post
        ]);
    }
}
