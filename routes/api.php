<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/todo-lists', [App\Http\Controllers\listsController::class, 'createLists']);
Route::put('/v1/todo-lists/{id}', [App\Http\Controllers\listsController::class, 'updateList']);
Route::delete('/v1/todo-lists/{id}', [App\Http\Controllers\listsController::class, 'deleteList']);
Route::get('/v1/todo-lists', [App\Http\Controllers\listsController::class, 'getAllLists']);
Route::get('/v1/todo-lists/{id}', [App\Http\Controllers\listsController::class, 'getList']);
