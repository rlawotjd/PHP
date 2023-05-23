<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'tasks.index!!';
    }

    /**
     * Show the form for creating a new resource.
     *리소스 생성을 위한 입력 폼 페이지
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     *리소스 생성 처리
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly=$request->only(["id","pw"]);
        // $request->id;추천
        // $request["id"];비추
        return $arrOnly["id"]."<br>".$arrOnly["pw"];
    }

    /**
     * Display the specified resource.
     *리소스 조회 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *리소스 수정 폼 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'tasks.edit!! : '.$id;
    }

    /**
     * Update the specified resource in storage.
     *리소스 수정 처리
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request); //보기
        $arrAll = $request->all(); //사용자 전달하는 모든 데이터 획득(배열)
        var_dump($arrAll);
        $arrOnly=$request->only(['id','name']);//사용자가 전달한 데이터중 해당하는 데이터 획득(배열)
        var_dump($arrOnly);
        $oneGet=$request->get('pw');//사용자 전달한 데이터중 해당하는 하나의 값만 획득(배열x)
        var_dump($oneGet);
        return 'tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'tasks.destroy!! : '.$id;
    }
}
