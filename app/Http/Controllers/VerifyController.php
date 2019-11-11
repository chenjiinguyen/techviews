<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\User;
use Auth;

class VerifyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show Verify Page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.verify')->with([
            'pageTitle' => 'Xác Thực Tài Khoản',
        ]);
    }

    /**
     * Update Read ID and Redirect.
     *
     * @return Redirect Home;
     */
    public function verify(Request $request)
    {
        if (!empty($request->input("code")) and !empty($request->input("url")))
        {
            $url = $request->input("url");
            $idpostverymember = explode("?fb_comment_id=", $url);
            $client = new Client();
            try {
                $res = $client->get('https://graph.facebook.com/' . $idpostverymember[1] . "?access_token=" . env("TOKEN_FACEBOOK"));
            }
            catch (GuzzleHttp\Exception\RequestException $e) {
                return redirect(route('verify'));
            }
            if ($res->getStatusCode() == '200') {
                $result = json_decode($res->getBody(), true);
                if (auth()->user()->provider_id === $result['message']) {
                    User::where('provider_id', $result['message'])->update(['real_id' => $result['from']['id'], 'avatar' => "https://graph.facebook.com/".$result["from"]["id"]."/picture?width=1920" ]);
                    return redirect(route('home'));
                }
            }
        }
        return redirect(route('verify'));
    }


}
