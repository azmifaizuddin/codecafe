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
    return view('home.index');
});
Route::get('/masuk', function () {
    return view('auth.login');
});
Route::get('/daftar', function () {
    return view('auth.register');
});
Route::get('/forum', 'ForumController@index');
Route::get('/pengguna', 'UserController@index');
Route::get('/tag', 'TagController@index');

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
