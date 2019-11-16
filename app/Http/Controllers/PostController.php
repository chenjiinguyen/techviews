<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Post;
use App\User;
use Auth;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostController extends Controller
{

    public function index($hash) {
        $mem = Auth::user();
        $post = Post::where('hash', $hash)->first();
        $author = User::where('real_id', $post->id_author)->first();
        $author->countPost = Post::where('id_author', $post->id_author)->count();
        $result = $this->checkPost($post, $mem);
        // $action = json_decode(,true);

        return view('post.view')->with([
            'pageTitle' => $post->title,
            'dataProtect' => $result->data,
            'author' => $author,
            'userAction' => json_encode($result->action),
        ]);
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
            $client = new Client();

            // Check Member In Group
            try {
                $res = $client->get('https://graph.facebook.com/' . $user->real_id . "/groups?limit=10000&access_token=" . env("TOKEN_FACEBOOK"));
            }
            catch (GuzzleHttp\Exception\RequestException $e) {
                return redirect(route('verify'));
            }
            if ($res->getStatusCode() == '200') {
                $result = json_decode($res->getBody(), true);
                if(array_search(env("GROUP_ID"), array_column($result["data"], 'id')) > -1)
                    $data->action->member = true;
            }

            // Check Reaction in Post
            try {
                $res = $client->get('https://graph.facebook.com/' . $post->id_post . "/likes?limit=10000&access_token=" . env("TOKEN_FACEBOOK"));
            }
            catch (GuzzleHttp\Exception\RequestException $e) {
                return redirect(route('verify'));
            }
            if ($res->getStatusCode() == '200') {
                $result = json_decode($res->getBody(), true);
                if(array_search($user->real_id, array_column($result["data"], 'id')) > -1)
                    $data->action->reaction = true;
            }

            // Check Comment in Post
            try {
                $res = $client->get('https://graph.facebook.com/' . $post->id_post . "/comments?limit=10000&access_token=" . env("TOKEN_FACEBOOK"));
            }
            catch (GuzzleHttp\Exception\RequestException $e) {
                return redirect(route('verify'));
            }
            if ($res->getStatusCode() == '200') {
                $result = json_decode($res->getBody(), true);
                if(array_search($user->real_id, array_column(array_column($result["data"], 'from'),'id')) > -1)
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


            if(array_sum($in_post) == array_sum($in_user))
                $data->data->text = Markdown::convertToHtml($text);

        }
        else $data->data->text = '<div class="alert alert-danger text-white" role="alert"><strong>Chưa Mở Khóa!</strong> Bài Viết Chưa Được Đăng</div>';
        return $data;
    }
}
