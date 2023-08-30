<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    // show a single post
    public function show(Post $post)

    {
        return view('posts.post', [
            'post' => $post
        ]);
    }


    // store a new post
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->user()->id;

        // form slug from the title
        $slug = Str::slug($formFields['title']);
        $formFields['slug'] = $slug;

        // form excerpt from the content
        $excerpt = Str::limit(strip_tags($formFields['content']), 150);
        $formFields['excerpt'] = $excerpt;

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully.');
    }
}
