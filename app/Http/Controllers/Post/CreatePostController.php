<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function index()
    {
        return view('post.create')->with(
            ['pageTitle' => "Tạo Nội Dung Ẩn"]
        );
    }
}
