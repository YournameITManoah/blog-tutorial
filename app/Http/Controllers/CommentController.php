<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Post $post)
    {

        request()->validate([
            'body' => 'required|min:2'
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->postComment($post, new Comment(request(['body'])));

        return back();
    }
}
