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

Route::get('/{project}/todo-list', 'TaskController@taskList');
Route::post('/{project}/store-task', 'TaskController@storeTask');
Route::get('/{project}/edit-task','TaskController@updateTask');
