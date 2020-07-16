<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Post $post) {
        return response()->json($post->comments()->with('user')->latest()->get());
    }

    public function store(Request $request, Post $post) {
        $comment = $post->comments()->create([
            'body' => $request->body,
            'user_id' => Auth::id()
        ]);

        return response()->json($comment->load('user'));
    }
}
