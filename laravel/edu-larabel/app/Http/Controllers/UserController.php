<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $req)
    {
        $req->validate([
            'email'=>'required|email|max:100'
            ,'password'=>'required|regex:/^(?=.*[a-zA-Z])(?=.*[!@#$%^*-])(?=.*[0-9]).{8,20}$/'
        ]);

        $user=User::where('email', $req->email)->first(); //mt?굳이 first 쓴이유가 뭐지
        if (!$user||!(Hash::check($req->password, $user->password))) {
            $error = '아이디와 비밀번호를 확인해주세여';
            return redirect()->back()->withErrors([$error]);
        }
        Auth::login($user);
        if (Auth::check()) {
            session($user->only('id'));
            return redirect()->intended(route('boards.index')); //mt? intended 원래 접근할려는 곳으로 이동 만약에 없을시 보드로 지정
        } else {
            $error = '인증작업 에러';
            return redirect()->back()->withErrors([$error]);
        }
    }
    public function registration()
    {
        return view('registration');
    }

    public function registrationPost(Request $req)
    {
        $req->validate([
            'name' =>'required|regex:/^[가-힣]+$/|min:2|max:30'
            ,'email'    => 'required|email|max:100'
            ,'password'=>'same:passwordChk|regex:/^(?=.*[a-zA-Z])(?=.*[!@#$%^*-_\=+])(?=.*[0-9]).{8,20}$/' //mt?{8,20}길이 제한인거 같은데,,,
        ]);
        // $req['password'] =Hash::make($req->password); //mt?킹만했는데 밑에 유저크리에이트에서 막힌다
        // var_dump($req);
        // $user=User::create($req);

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Hash::make($req->password);

        $user = User::create($data);
        if(!$user){ //mt?무결성 검사는 불가능한가
            $error='시스템 에러가 발생하여, 회원가입에 실패했습니다. <br>잠시 후에 다시 회원가입을 시도해 주십시오.';
            return redirect()->rout('users.registration')->withErrors([$error]);
        }
        return redirect()->route('users.login')->with('success','회원가입을 완료 했습니다.<br>가입하신 아이디로 로그인을 부탁드립니다');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('users.login');
    }

    public function withdraw()  //mt? 회원탈퇴 메소드인가
    {
        $id=session('id');
        $result=User::destroy(($id));  //mt?굳이 메소드 선언 할필요가
        Session::flush();
        Auth::logout();
        return redirect()->route('users.login');
    }
    public function edit()
    {
        $user = User::find(Auth::User()->id);

        return view('userEdit')->with('data',$user);
    }

    public function editPost(Request $req)
    {
        $arrKey=[];

        $baseUser=User::find(Auth::User()->id);

        if (!Hash::check($req->bPassword,$baseUser->password)) {
            return redirect()->back()->withErrors('기존 비밀번호를 확인해 주세요');
        }

        if ($req->name !== $baseUser->name) {  //mt? 변경할 값만 따로 저장 이게맞나?->더효율적인 방안이 있을거같음 ->재생산성 때문인가
            $arrKey[]='name';
        }
        if($req->email !== $baseUser->email) {
            $arrKey[] = 'email';
        }
        if(isset($req->password)) {  //mt? 기존의 값과 비교 왜안했지 이러면 기존과 같은 비밀번호로 변경할거같은데
            $arrKey[] = 'password';
        }

        $chkList=[
            'name'      => 'required|regex:/^[가-힣]+$/|min:2|max:30'
            ,'email'    => 'required|email|max:100'
            ,'bPassword'=> 'regex:/^(?=.*[a-zA-Z])(?=.*[!@#$%^*-])(?=.*[0-9]).{8,20}$/'
            ,'password' => 'same:passwordChk|regex:/^(?=.*[a-zA-Z])(?=.*[!@#$%^*-])(?=.*[0-9]).{8,20}$/'
        ];

        $arrChk['bPassword']=$chkList['bPassword'];
        foreach ($arrKey as $val) {
            $arrChk[$val]=$chkList[$val];
        }

        $req->validate($arrChk);

        foreach ($arrKey as $val) {
            if($val==='password'){
                $baseUser->$val=Hash::make($req->$val);
                continue;
            }
            $baseUser->$val=$req->$val; //mt? 이거때문에 foreach문 써야함 위에 if문 때문이아닌
        }

        $baseUser->save();

        return redirect()->route('users.edit');
    }
}
