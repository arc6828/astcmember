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
    Route::post('/article/{id}/testmail', 'ArticleController@testmail');
    Route::resource('article', 'ArticleController');
    Route::resource('evaluation', 'EvaluationController');
    Route::resource('document', 'DocumentController');
    Route::resource('article-evaluation', 'ArticleEvaluationController');
      
});

Route::get('/district', function () {
    return view("district/index");
});
Route::resource('payment', 'PaymentController');

Route::get('university_payment/index_payment', 'university_paymentController@index_payment');
Route::resource('university', 'UniversityController');
Route::resource('university', 'universityController');
Route::resource('university_payment', 'university_paymentController');


//ดาวโหลด excel
Route::get('export', 'MyController@export')->name('export');
//แสดงปุ่ม import + export
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');


Route::resource('reviewer', 'ReviewerController');