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

//ルートでメイン画面
Route::get('/', function () {
    return view('index');
});

//talk画面へ
Route::get('/talk', function () {
    return view('talk');
});

//一覧画面へ(特に機能はなく一覧で表示しているだけ)
Route::get('/list', 'TalkController@list')->name('list');

Auth::routes();

//ログイン後のhome画面からCRUD
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@create')->name('create');
Route::post('/home/store', 'HomeController@store')->name('store');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/home/update/{id}', 'HomeController@update')->name('update');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('delete');


