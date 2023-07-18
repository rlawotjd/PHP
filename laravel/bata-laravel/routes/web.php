<?php

use App\Http\Controllers\SocialController;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
Route::get('/send', function () {
    Mail::to('test@test.com')->send(new OrderShipped());
});

Route::get('/kakao', [SocialController::class,'redirect']);
Route::get('/kakao/back', [SocialController::class,'back']);
