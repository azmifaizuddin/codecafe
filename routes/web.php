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

use App\Http\Controllers\questionsController;
use App\questionsModel;
use Spatie\QueryBuilder\QueryBuilder;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/questions', 'questionsController@index');
Route::get('/questions/create', 'questionsController@create');
Route::post('/questions', 'questionsController@store');
Route::get('/answers/{id}', 'answersController@create');
Route::post('/answers/{id}', 'answersController@store');

Route::get('/masuk', function () {
    return view('auth.login');
});
Route::get('/daftar', function () {
    return view('auth.register');
});
Route::get('/forum', 'ForumController@question');
Route::get('/forum', 'ForumController@cari');

Route::get('/pengguna', 'ForumController@user');
Route::get('/tag', 'ForumController@tag');
Route::get('/tag/{tag}', 'ForumController@tag_view');

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
