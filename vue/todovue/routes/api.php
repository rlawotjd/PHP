<?php

use App\Http\Controllers\TodoListController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/todo')->group(function(){ //동사형태라 restfulApi가 아님 명사 복수형으로 만들어야함
    // Route::resource('/', TodoListController::class);
    Route::get('/', [TodoListController::class,'Index']);
    Route::post('/', [TodoListController::class,'store']);
    Route::delete('/{id}', [TodoListController::class,'destroy']);
    Route::put('/{id}', [TodoListController::class,'update']);
});
