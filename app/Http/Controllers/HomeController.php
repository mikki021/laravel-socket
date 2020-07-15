<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function allPosts() {
        $posts = Post::all()->load(['user', 'comments']);

        return view('posts', compact('posts'));
    }

    public function singlePost($post) {
        $post = Post::findOrFail($post);

        return view('single-post', compact('post'));
    }

    public function userPosts($user) {
        $posts = Post::where('user_id', $user)->with(['user', 'comments'])->get();

        return view('posts', compact('posts'));
    }
}
