<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Post;
use App\User;
use App\Unlock;
use Auth;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostController extends Controller
{

    public function index($hash) {
        $mem = Auth::user();
        $post = Post::where('id', $hash)->first();
        $author = User::where('real_id', $post->id_author)->first();
        $author->countPost = Post::where('id_author', $post->id_author)->count();
        if(empty($post->id_post))
        {
            $new_id_post = check_post_exist($hash);
            if($new_id_post["status"])
            {
                $post->id_post = $new_id_post["id"];
                $post->save();
            }
        }
        // if(empty(json_decode(@file_get_contents("https://graph.facebook.com/{$post->id_post}/?access_token=".config('app.token'),true))))
        // {
        //     $post->id_post = NULL;
        //     $post->save();
        // }
        
        $result = $this->checkPost($post, $mem);
        
        Post::where('id', $hash)->update(['unlock' => Unlock::where('hash_id', $hash)->count()]);
        $post = Post::where('id', $hash)->first();
        
        // $action = json_decode(,true);
        
        return view('post.view')->with([
            'pageTitle' => $post->title,
            'dataProtect' => $result->data,
            'author' => $author,
            'userAction' => json_encode($result->action),
            'PostinGroup' => (!empty($post->id_post))?Markdown::convertToHtml($this->PostinGroup($post->id_post)):"",
        ]);
    }
    public function PostinGroup($id_post)
    {
        if(empty($id_post)) return "";
        $result = json_decode(@file_get_contents("https://graph.facebook.com/{$id_post}/?access_token=".config('app.token')),true);
        if(!empty($result["id"]))
        {
            return $result["message"];
        }
            
        
    }

    public function checkPost(Post $post,User $user)
    {
        $text = $post->text;
        $data = (object)array();
        $in_post = $in_user = array("member" => 0,"reaction" => 0,"comment" => 0);
        $data->data = $post;
        $data->action = (object)array("member" => false,"reaction" => false,"comment" => false);

        $data->data->text = '<div class="alert alert-danger text-white" role="alert"><strong>Chưa Mở Khóa!</strong> Vui Lòng Thực Hiện Hết Điều Kiện Mở Khỏa</div>';
        if(!empty($post->id_post))
        {
            
            $unlock = Unlock::where("hash_id",$post->id)->where("user",$user->real_id)->first();
            if(!empty($unlock))
            {
                $data->action->member = true;
                $data->action->reaction = true;
                $data->action->comment = true;
                goto unlock;
            }
                         

            // Check Member In Group
            $result_ingroup = json_decode(@file_get_contents("https://graph.facebook.com/{$user->real_id}/groups?limit=10000&access_token=".config('app.token')),true);
            if(!empty($result_ingroup["data"]))
            {
                if(array_search(config('app.group_id'), array_column($result_ingroup["data"], 'id')) > -1)
                    $data->action->member = true;
            }
            

            // Check Reaction in Post
            $result_likes = json_decode(@file_get_contents("https://graph.facebook.com/{$post->id_post}/likes?limit=10000&access_token=" . config('app.token')),true);
            if(!empty($result_ingroup["data"]))
            {
                if(array_search($user->real_id, array_column($result_likes["data"], 'id')) > -1)
                    $data->action->reaction = true;
            }


            // Check Comment in Post
            $result_comments = json_decode(@file_get_contents("https://graph.facebook.com/{$post->id_post}/comments?limit=10000&access_token=" . config('app.token')),true);
            if(!empty($result_ingroup["data"]))
            {
                if(array_search($user->real_id, array_column(array_column($result_comments["data"], 'from'),'id')) > -1)
                    $data->action->comment = true;
            }

            if($post->in_group)
                $in_post["member"] = 1;
            if($post->reaction)
                $in_post["reaction"] = 10;
            if($post->comment)
                $in_post["comment"] = 100;


            if($post->in_group && $data->action->member)
                $in_user["member"] = 1;
            if($post->reaction && $data->action->reaction)
                $in_user["reaction"] = 10;
            if($post->comment && $data->action->comment)
                $in_user["comment"] = 100;

            unlock:

            if(!empty($unlock) || array_sum($in_post) == array_sum($in_user))
            {
                if(empty($unlock))
                {
                  Unlock::firstOrCreate(array('hash_id' =>  $post->id,'user' => $user->real_id));
                }
                $data->data->text = Markdown::convertToHtml($text);
            }
                

        }
        else $data->data->text = '<div class="alert alert-danger text-white" role="alert"><strong>Chưa Mở Khóa!</strong> Bài Viết Chưa Được Đăng</div>';
        return $data;
    }
}
