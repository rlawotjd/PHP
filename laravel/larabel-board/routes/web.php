<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\BoardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---라우트 정의---

//문자열 리턴
Route::get('/hi', function () {
    return 'hello,World!';
});

//뷰 리턴 뷰파일 없으면 에러 터짐
Route::get('/mv', function () {
    return view('mv');
});

//HTTP 메소드 대으하는 라우터
//get요청에대한처리
Route::get('/method', function(){
    return 'getMethod!!';
});
//post요청에 대한 처리
Route::get('/home', function () {
    return view('home');
});
Route::post('/method', function () {
    return 'postMethod!!';
});
//put 요청에대한처리
Route::put('/method', function () {
    return 'put method!!';
});
//delete 요청에 대한 처리
Route::delete('/method', function () {
    return 'delete method!!';
});
//모든 요청에 대한 처리 / 가장 마지막에 정의 된게 실행
Route::any('/method', function () {
    return 'any method';
});
Route::any('/method', function () {
    return view('home');
});
//특정(?) 메소드 요청에 대한 처리
Route::match(['get', 'post'], '/method', function () {
    return 'Match Method!!!';
});
//라우트에서 파라미터 제어
//쿼리 스트링으로 파라미터 획득
Route::get('/query', function (Request $request) {
    return $request->id."\t".$request->name;
});
//url세그먼트로 지정 파라미터 획득
Route::get('segment/{id}', function ($id) { //없는 정보 에러
    return "segment ID: ".$id;
});

Route::get('segment/{id}', function (Request $request) { //빈란 출력
    return "segment ID: ".$request->id;
});

Route::get('segmentAuto/{id?}', function ($id="hello") {
    return "segment ID: ".$id;
});
//라우트의 이름지정
Route::get('/nameshome', function () {
    return view('nameshome');
});
Route::get('/names', function () {
    return 'names.index!!!!';
})->name('names.index');

// 라우트 매칭 실패시 대체 라우트 정의

route::fallback(function (){
    return '잘못된 경로로 접속하셧습니다';
});

//라우트의 그룹 및 공통경로설정 미들웨어 쓰기 위해서
// Route::get('/users/login', function () {
//     return 'login!!';
// });
// Route::get('/users/logout', function () {
//     return 'logout!!';
// });
// Route::get('/users/registration', function () {
//     return 'registration!!';
// });
//공통 경로
Route:: prefix('users')->group(function () {
    Route::get('/login', function () {
        return 'login!!';
    })->name('users.login');
    Route::get('/logout', function () {
        return 'logout!!';
    })->name('users.logout');
    Route::get('/registration', function () {
        return 'registration!!';
    })->name('users.registration');
});

//서명 라우터
Route::get('/makeSign', function () {
    //일반 URL 링크 생성하기
    // $baseUrl = route('invitation',['invitation'=>5816,'group'=>678]);
    $baseUrl = route('sign');

    //서명된 URL링크 생성하기
    // $signUrl=URL::signedRoute('invitation',['invitation'=>5816,'group'=>678]);
    $signUrl=URL::signedRoute('sign');

    //유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl=URL::temporarySignedRoute('sign',now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl;
});
// Route::get('/invitation/{invitation}/{group}', function () {
//     return "sign!!";
// })->name('invitation')->middleware('signed');
Route::get('/sign', function () {
    return "sign!!";
})->name('sign')->middleware('signed');

// Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');
// Route::get('user', 'UserController@index')->name('user');
// Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
//     return $post;
// })->scopeBindings();
// Route::scopeBindings()->group(function () {

// });
// Route::post('user', 'UserController@index')->name('user');
// Route::any('users/{id}', function ($id) {

// });
// Route::get('users/{id}', function ($id) {

// });
// Route::controller('users', 'UserController');
// Route::current()
// Route::currentRouteAction();
// Route::currentRouteName()
// Route::delete('users/{id}', function ($id) {

// });
// Route::dispatch($request);
// Route::dispatchToRoute($request);
// Route::get('users/{id}', function ($id) {

// });
// Route::middleware(['auth', 'second'])->group(function () {

// });
// $router->model('user', 'App\Models\User')
// $router->pattern('id', '[0-9]+')
// Route::redirect('URI', 'URI', 301);
// Route::resource('user', UserController::class);
// $router->when('admin/*', 'admin', ['post'])
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

//컨트롤러
//커멘드로 컨트롤러 생성 : php artisan make:controller TestController
Route::get('/test', [TestController::class, 'index'])->name('test.index');
Route::get('/test1', [TestController::class, 'view'])->name('test1.index');
//커멘드로 컨트롤러 생성php artisan make:controller TasksController --resource
Route::resource('/tasks', TasksController::class); //한번에 모든 함수들 연결
//php artisan route:list
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');
Route::resource('/board', BoardController::class);
