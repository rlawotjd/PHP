<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiListController;

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

Route::get('/list/{id}', [ApiListController::class, 'getList'])->name('get.List');
Route::post('/list', [ApiListController::class, 'postList'])->name('post.List');
Route::put('/list/{id}', [ApiListController::class, 'putList'])->name('put.List');
Route::delete('/list/{id}', [ApiListController::class, 'delList'])->name('del.List');
