<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 쿼리 빌더
    //select
    public function index()
    {
        // $result = DB::select('select * from categories');
        // $result = DB::select('select * from categories where no=:no',['no'=>$no]);
        // $result = DB::select('select * from categories where no=?',[1]);

        // $input =['4','5','7']; //categories 의 no 컬럼
        // // 게시글 번호, 게시글 제목, 카테고리명을 출력 해주세요.

        // $result_ij=DB::select('SELECT b.bno, b.btitle, c.name
        // FROM boards b
        // INNER JOIN categories cg
        // ON b.category=cg.no
        // WHERE cg.no=? OR cg.no=? OR cg.no=?
        // ORDER BY b.bno ASC LIMIT 5 ', $input);
        // $put=['4','test_title','test_contents',now(),now()];
        // $result_is=DB::insert('insert into boards(category,btitle,bcontent,created_at,updated_at)values(?,?,?,?,?)',$put );

        // $result_up=DB::update('UPDATE boards SET btitle = ? WHERE bno=(SELECT MAX(bno)FROM boards)', ['test2']);

        // $result_del=DB::delete('delete from boards where bno=(SELECT MAX(bno)FROM boards)');
        //쿼리 빌더 체이닝
        $no = ['5','8'];
        $no1 = ['5'];
        // dd(); // 작성방식 출력 리턴까지 안감
        // $result_cn=DB::table('categories')->where('no',$no)->dd();
        // $result_cn=DB::table('categories')->where('?',$no[0])->Where('?',$no[1])->dd();
        // $result_cn=DB::table('categories')->where('?',$no[0])->orWhere('?',$no[1])->dd();
        // $result_cn=DB::table('categories')->whereIn('no',$no)->dd();
        // $result_cn=DB::table('categories')->whereNotIn('no',$no)->dd();
        // $result_cn=DB::table('categories')->select('id','no','name')->dd();
        // $result_cn=DB::table('categories')->select('id','no','name')->orderBy('name','rand()')->dd();

        // 주의 필요
        //whereRaw() : 구문그대로 삽입
        // $result_wr= DB::table('categories')->whereRaw('no ='.$no1[0])->dd(); //보안약함

        // $result_cn=DB::table('boards') ->orderBy('bno','DESC')->first(); //==limit=1과 비슷 실패시 false리턴
        // $result_cn=DB::table('boards') ->orderBy('bno','DESC')->firstOrFail(); // first()와 같은 동작 But 실패시 예외 발생 / 엘로쿼트 모델 객체(ORM_에서만 가능

        //직계함수
        // $result_f =DB::table('boards') ->count();
        // $result_f =DB::table('boards') ->avg('bno');
        // $result_f =DB::table('boards') ->min('bno');
        // $result_f =DB::table('boards') ->max('bno');

        //카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력
        //카테고리 번호 /카테고리 명 /갯수
        //체인으로
        $result= DB::table('categories')->
        select('categories.no','categories.name')->
        // count()-> //DB::raw 사용
        join('boards','categories.no','boards.category')->
        where('categories.active_flg','1')->
        groupBy('categories.no','categories.name')->dd();


        //트랜잭션
        // DB::beginTransaction();

        // DB::rollback();
        // DB::commit();

        return var_dump($result_f);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
