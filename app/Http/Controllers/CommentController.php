<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {

        request()->validate([
            'body' => 'required|min:2'
        ]);

        $post->addComment(request('body'));

        return back();
    }
}
