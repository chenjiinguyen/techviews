<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CreatePostController extends Controller
{
    public function index()
    {
        return view('post.create')->with(
            ['pageTitle' => "Tạo Nội Dung Ẩn"]
        );
    }

    public function create(Request $request)
    {
        $text = $request->input("text");
        $title = $request->input("title");
        if(!empty($text) && !empty($title))
        {
            $in_group = $request->input("ingroup");
            $reaction = $request->input("reaction");
            $comment = $request->input("comment");
            $hash = getHash(7);
            while(Post::where("hash",$hash)->first() != NULL)
                $hash = getHash(7);
            $post =  Post::firstOrCreate(
                    [    "hash" => $hash ],
                    [
                        "title" => $title,
                        "id_author" => Auth::user()->real_id,
                        "in_group" => ($in_group == "on")?true:false,
                        "reaction" => ($reaction == "on")?true:false,
                        "comment" => ($comment == "on")?true:false,
                        "text" => $text,
                        "password" => $request->input("password"),
                    ]
                );
            return redirect("/post/".$hash);
        }
        return redirect( route('create.post'));
    }
}
