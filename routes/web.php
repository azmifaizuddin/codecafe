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

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/questions', 'questionsController@index');
Route::get('/questions/create', 'questionsController@create');
Route::post('/questions', 'questionsController@store');
Route::get('/answers/{id}', 'answersController@create');
Route::post('/answers/{id}', 'answersController@store');
