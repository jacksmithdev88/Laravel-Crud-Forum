<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() { 
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create() { 
        return view('posts.create');
    }

    public function createSubmit(Post $post) { 
        $post->title = request('title');
        $post->content = request("content");
        $post->postedBy = Auth::user()->name;

        $post->save();
        return redirect('/');
    }

    public function edit($slug) {
        $selectedPost = Post::find($slug);
        return view('posts.edit', ['post' => $selectedPost]);
    }

    public function editSubmit($slug) { 
        $selectedPost = Post::find($slug);
        $selectedPost->title = request('title');
        $selectedPost->content = request('content');
        $selectedPost->save();

        return redirect('/');
    }

    public function delete($slug) { 
        $selectedPost = Post::find($slug);
        $selectedPost->delete();
        return redirect('/');
    }
}
