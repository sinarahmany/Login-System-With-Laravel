<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Post $post)
    {
        //$post = Post::find($id); better way to do this is down below
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
}
