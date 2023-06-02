<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginpost(Request $req)
    {
        // var_dump($req);
        Log::debug("login start",$req->only('email','password'));
        //유효성 체크
        Log::debug("Validator start");
        $validate = Validator::make($req->only('email','password'),[
            'email'=>'required|email|max:30'
            ,'password'=>'required|min:2|max:30'
        ]
        );
        Log::debug("validator end");

        if ($validate->fails()) {
            Log::debug("validator fails start");

            return redirect()->back()->withErrors($validate);
        }
        // 유저 정보 습득
        $user = DB::select('select id, email, password from users where email= ? ',[$req->email]);
        Log::debug("Select user",[$user[0]]);
        if (!$user||$req->password !== $user[0]->password) {
            return redirect()->back()->withErrors(["아이디와 비밀번호 확인해주세요"]);
        }
        Auth::loginUsingId($user[0]->id);
        if (!Auth::check()) {
            Log::debug("유저인증 NG");
            return redirect()->back()->withErrors('인증처리 에러');
        }
        else{
            Log::debug("유저인증 OK");
            return redirect('/');
        }
        return redirect()->back();
    }
}
