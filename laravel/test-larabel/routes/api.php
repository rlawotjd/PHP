<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{email}', [ApiUserController::class, 'UserGet'])->name('user.get');
Route::post('/users', [ApiUserController::class, 'UserPost'])->name('user.post');
Route::put('/users/{email}', [ApiUserController::class, 'UserPut'])->name('user.put');
Route::delete('/users/{email}', [ApiUserController::class, 'UserDel'])->name('user.delete');

Route::resource('test', TestApiController::class);
