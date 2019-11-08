<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index($hash) {
        $post = Post::where('hash', $hash)->first();
        return view('post.view')->with([
            'pageTitle' => $post->title,
        ]);
    }
}
