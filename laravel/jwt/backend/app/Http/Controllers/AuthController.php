<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;

    public function __construct()
    {
        $this->obj_jwt=new JWT();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function issueToken(Request $req)
    {
        Log::debug("issueToken start");
        Log::debug("id",$req->only('id'));;
        //유효성
        //디비 검색

        //JWT 생성
        $token=$this->obj_jwt->createJWT($req->only('id'));
        Log::debug("token:".$token);
        $res=[
            'errflg'=>'0',
            'token'=>$token
        ];

        Log::debug("issueToken end");

        return response(json_encode($res),200);
    }
    public function chk(Request $req)
    {
        $token= $req->header('Authorization');

        $res=[
            'errflg'=>'0',
            'msg'=>'OK'
        ];
        $status=200;
        $result=$this->obj_jwt->chkToken($token);
        if(is_array($result)){
            $res=[
                'errflg'=>'1',
                'error_info'=>[
                    'code'=>$result['code'],
                    'msg'=>$result['msg']
                ]
            ];
            $status=401;
        }
        return response(json_encode($res),$status);
    }
}
