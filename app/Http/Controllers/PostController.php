<?php

namespace App\Http\Controllers;

use \App\Models\Post;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['index', 'show'])
        ];
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->publish(new Post(request(['title', 'body'])));

        return redirect('/');
    }

    public function destroy() {}
}
