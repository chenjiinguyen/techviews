<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class SearchAPIController extends Controller
{
    public function index()
    {
        return Post::all()->makeHidden('text')->makeHidden('password')->makeHidden('in_group')->makeHidden('reaction')->makeHidden('comment')->toArray();
    }

    public function show($keyword)
    {
        return Post::where("title","LIKE","%{$keyword}%")->get()->makeHidden('text')->makeHidden('password')->makeHidden('in_group')->makeHidden('reaction')->makeHidden('comment')->toArray();
    }
}
