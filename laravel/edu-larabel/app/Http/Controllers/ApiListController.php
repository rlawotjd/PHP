<?php

namespace App\Http\Controllers;

use App\Models\Boards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiListController extends Controller
{
    public function getList($id)
    {
        $board = Boards::find($id);
        return response()->json([$board],200); //mt? status (상태 지위 신분) 뜻인데 뭐지 느낌상 길이 인데/아닌데?
    }

    public function postList(Request $req)
    {
        $board = new Boards([
            'title'=>$req->title
            ,'content'=>$req->content
        ]);
        $board->save(); //mt? 바로 세이브 박아버리네 17줄에 유효성 체크는 뭐지 / 필요였네

        $arr['errorcode']='0';
        $arr['msg']='success';
        $arr['data']=$board->only('id','title');

        return response()->json([$arr],404); //mt? 아하 오류시 보내는 페이지인듯 /?위에 겟 널값으로 오는데 /포스트맨으로 보내는거아닌가 모르겠네
    }
    public function putList(Request $req, $id)
    {
        $arrData=[
            'code'=>'0'
            ,'msg'=>''
        ];

        $data=$req->only('title','content');
        $data['id']=$id;

        $validator = Validator::make($data,[
            'id' => 'required|integer|exists:boards' //mt? exists(존재하다) 보드에 존재하는지묻는듯
            ,'title' => 'required|between:3,30'
            ,'content' => 'required|max:2000'
        ]);

        if ($validator->fails()) {
            $arrData['code']='E01';
            $arrData['msg']='Validate Error';
            $arrData['errmsg']=$validator->errors()->all();
        }else{
            $board = Boards::find($id);
            $board->title=$req->title;
            $board->content=$req->content;
            $board->save();
            $arrData['code']='0'; //mt? 35줄과 겹치지않나?
            $arrData['msg']='Success';
        }
        return $arrData; //mt? 왜 존슨 형태로 리턴안하지?
    }
    public function delList($id)
    {
        $arrData=[
            'code'=>'0'
            ,'msg'=>''
        ];
        $data['id']=$id;
        $validator = Validator::make($data,[
            'id'=>'required|integer|exists:boards,id' //mt? 43줄가 왜 차이가
        ]);

        if ($validator->fails()) {
            $arrData['code'] = 'E01';
            $arrData['msg'] = 'Error';
            $arrData['errmsg'] = 'id not found';
        } else {
            $board = Boards::find($id);
            if($board){
                $board->delete();
                $arrData['code'] = '0';
                $arrData['msg'] = 'Success';
            } else {
                $arrData['code'] = 'E02';
                $arrData['msg'] = 'Already Deleted';
            }
        }
        return $arrData; //mt? 왜 존슨 형태로 리턴안하지?22
    }

}

