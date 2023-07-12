<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

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

Route::get('/users/login', [UserController::class, 'login'])->name('user.login');
Route::post('/users/loginpost', [UserController::class, 'loginpost'])->name('user.loginpost');

Route::resource('/boards', BoardController::class);

Route::get('/send',function()
{
    Mail::to('rlawotjd026@gmail.com')->send(new OrderShipped());
});
