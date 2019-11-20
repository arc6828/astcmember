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


Route::get('/table', function () {
    return view('table');
});


Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::resource('profile', 'ProfileController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('article', 'ArticleController');
    Route::resource('evaluation', 'EvaluationController');
    Route::resource('document', 'DocumentController');
});

Route::get('/district', function () {
    return view("district/index");
});