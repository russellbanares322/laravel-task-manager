<?php

use Illuminate\Support\Facades\Route;
use App\Models\list_todo;
use App\Http\Controllers\ListTodoController;

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

Route::get('/', 'App\Http\Controllers\ListTodoController@index');

Route::get('/create', 'App\Http\Controllers\ListTodoController@create');

Route::get('/save_list', 'App\Http\Controllers\ListTodoController@store');

Route::get('/delete/{id}', 'App\Http\Controllers\ListTodoController@destroy');

Route::get('/edit/{id}', 'App\Http\Controllers\ListTodoController@edit');

Route::get('/update_list/{id}', 'App\Http\Controllers\ListTodoController@update');
