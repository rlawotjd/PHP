<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boards;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= Boards::select(['id','title','hits','created_at','updated_at'])->orderBy('hits','desc')->get();
        return view('list')->with('data',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('write');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $boards=new Boards([
            'title'=>$req->input('title')
            ,'content'=>$req->input('content')
        ]);
        $boards->save();
        return redirect('/boards');
        // $result= Boards::select(['id','title','hits','content'])->get();
        // return view('detail')->with('date',$result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result=Boards::find($id);
        $result->hits++;
        $result->save();
        return view('detail')->with('data',Boards::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $result= Boards::find($id);
        return view('update')->with('data',Boards::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $boards=Boards::find($id);
        // var_dump($boards);
        // var_dump($req);
        // // var_dump($id);
        // $a=$boards->title;
        // $b=$req->title;
        // var_dump($a);
        // var_dump($b);
        $boards->title=$req->title;
        $boards->content=$req->content;
        $boards->save();

        // return view('detail')->with('data',Boards::findOrFail($id));
        // return redirect('/boards/'.$id);
        return redirect()->rout('boards.show',['board'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boards=Boards::find($id);
        $boards->delete(); //물리적 삭제 X flg변경

        // $boards->deleted_at=now();
        return redirect('/boards');
    }
}
