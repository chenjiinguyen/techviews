<?php

if (! function_exists('getHash')) {
    function getHash ( $length ) {
        $str = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }
        return $str;
    }
}

if (! function_exists('rutgonlink')) {
    function rutgonlink($url)
    {
        $rutgon_url = file_get_contents("https://api-ssl.bitly.com/v3/user/link_save?access_token=2a979627febbddb3062efd545877029a5aa61924&longUrl={$url}");
        $a = json_decode($rutgon_url,true);
        return $a["data"]["link_save"]["link"];
    }

}

if (! function_exists('curl')) {
    function curl($url,$array = array('post' => false))
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36');
        curl_setopt($ch, CURLOPT_COOKIE, 'sucuri_cloudproxy_uuid_e2ffb3c1d=14016a78607f652400916f0416bead6b; csrfToken=2db1f1ed4c94fe9cb719dc8064c0c4ee618c4e32c92cf1fda7d1021545cf08f70edfc3b5e1e965a2f4f2d5875e116af8a77f90cd1a038f92e148d7348a006b29; _ga=GA1.2.1351250577.1525592899; _gid=GA1.2.274342878.1525592899; ab=2; AdLinkFly=02qfhe9idcc3lhkmkum5f5jeb3');
        if(!$array->post) {
            curl_setopt($ch, CURLOPT_POST, count($array));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}

if (! function_exists('check_post_exist')) {
    function check_post_exist($hashtag)
    {
        $check_post["status"] = false;
        $HASHTAG_FIND = env("HASHTAG_FIND");
        $hash_tag = "/#$HASHTAG_FIND@([a-zA-Z0-9]\w+)@/";
        $post_hashtag = json_decode(@file_get_contents("https://graph.facebook.com/".env("GROUP_ID")."/feed?fields=id,message&format=json&&limit=100&access_token=".config('app.token')),true);
        $i = 0;
        while (!empty($post_hashtag["data"][$i]))
        {
            $id_post = $post_hashtag["data"][$i]["id"];
            if(!empty($post_hashtag["data"][$i]["message"]))
            {
                preg_match_all ($hash_tag, $post_hashtag["data"][$i]["message"], $matches);
                foreach($matches[1] as $node)
                {
                  if($node == $hashtag)
                  {
                    $temp = explode ( '_' , $id_post);
                    $check_post["id"] = $temp[1];
                    $check_post["status"] = true;
                    break;
                  }
                }
            }
            $i++;
        }
        return $check_post;
    }

}