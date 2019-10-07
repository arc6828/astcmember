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
    return view('table');
});

Route::resource('profile', 'ProfileController');
Route::resource('evaluation', 'EvaluationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('book', 'BookController');
