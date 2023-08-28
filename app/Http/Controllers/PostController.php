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

    // show form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // store a new post
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully.');
    }

    // show a single post
    public function show(Post $post)

    {
        return view('posts.post', [
            'post' => $post
        ]);
    }
}
