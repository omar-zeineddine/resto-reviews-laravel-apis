<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\RestoController@index');
Route::get('/list', 'App\Http\Controllers\RestoController@list');

Route::view('/add', 'add_resto');
Route::post('/add', 'App\Http\Controllers\RestoController@addResto');


Route::get('/edit/{id}', 'App\Http\Controllers\RestoController@editResto');
Route::post('/edit', 'App\Http\Controllers\RestoController@updateResto');

Route::get('/delete/{id}', 'App\Http\Controllers\RestoController@deleteResto');

// registration and login
Route::view('register', 'register');
Route::post('register', 'App\Http\Controllers\userController@register');

Route::view('login', 'login');
Route::post('login', 'App\Http\Controllers\userController@logIn');