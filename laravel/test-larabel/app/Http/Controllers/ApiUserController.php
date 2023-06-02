<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    public function UserGet($email)
    {
        $arr=[
            'code'=>'0'
            ,'msg'=>''
        ];
        $user = DB::select('select name, email from users where email = ?', [$email]);

        if($user){
            $arr['code']='0';
            $arr['msg']='Success Get User';
            $arr['data']= $user[0];
        }else{
            $arr['code']='E01';
            $arr['msg']='No Data';
        }

        return $arr;
    }
    public function UserPost(Request $req)
    {
        $result = DB::insert('insert into users (name, email, password) values (?, ?, ?)',
        [
            $req->name
            ,$req->email
            ,Hash::make($req->password)
        ]);
        if ($result) {
            $arr['code']='0';
            $arr['msg']='Success Get User';
            $arr['data']= [$req->email];
        }else{
            $arr['code']='E01';
            $arr['msg']='Failed Registration';
        }
        return $arr;
    }
    public function UserPut(Request $req, $email)
    {
        $result =DB::update('update users set name = ? where email = ?', [$req->name,$email]);
        if ($result) {
            $arr['code']='0';
            $arr['msg']='Success Update';
            $arr['data']= [$req->name];
        }else{
            $arr['code']='E01';
            $arr['msg']='Failed Update';
        }
        return $arr;
    }
    public function UserDel($email)
    {
        $date=Carbon::now();
        $result = DB::update('update users set deleted_at = ?, del_flg = ? where email = ?', [$date,"1",$email]);
        if ($result) {
            $arr['code']='0';
            $arr['msg']='Success Update';
            $arr['data']= ['deleted_at'=>$date, 'email'=>$email];
        }else{
            $arr['code']='E01';
            $arr['msg']='Failed Delete';
        }
        return $arr;
    }
}
