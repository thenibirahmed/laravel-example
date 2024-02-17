<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            'posts' => Post::paginate(10)
        ]);
    }

    public function comments()
    {
        return view('posts.comments',[
            'comments' => Comment::paginate(10)
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function commentStore(Request $request)
    {
        Comment::create([
            'title' => request('title'),
            'post_id' => request('post_id')
        ]);

        return back();
    }
}
