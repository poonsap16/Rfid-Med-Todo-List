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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/rfid-todo-list', function () {
//     return view('rfid-todo-list');
// });

Route::get('/rfid-todo-list', 'TaskController@taskList');
Route::post('/store-task', 'TaskController@storeTask');
