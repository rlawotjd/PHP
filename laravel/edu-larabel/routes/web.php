<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardsController;
use App\Http\Controllers\UserController;


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

Route::resource('/boards', BoardsController::class);

//Users

Route::get('/users/login', [UserController::class, 'login'])->name('users.login');
Route::post('users/loginpost', [UserController::class, 'loginPost'])->name('users.loginPost');
Route::get('users/registration', [UserController::class, 'registration'])->name('users.registration');
Route::post('users/registrationpost', [UserController::class, 'registrationPost'])->name('users.registrationPost'); //mt? 메소드가 post인데 url 왜 get과 다르게 했는가
Route::get('/users/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('/users/withdraw', [UserController::class, 'withdraw'])->name('users.withdraw');
Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/edit', [UserController::class, 'editPost'])->name('users.edit.post');
