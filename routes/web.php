<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
se App\Task;
use Illuminate\Http\Request;

/**
 * 全タスク表示
 */
Route::get('/', function () {
    //
});

/**
 * 新タスク追加
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * 既存タスク削除
 */
Route::delete('/task/{id}', function ($id) {
    //
});
Route::get('/', function () {
    return view('tasks');
});
