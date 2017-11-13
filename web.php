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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('logged');


Route::get('/about', function () {
    return view('about');
});
Route::get('/homein', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('cse','PdfController@index');

Route::get('/algo', function () {
    return view('algo');
});
Route::get('/database', function () {
    return view('database');
});
Route::get('/java', function () {
    return view('java');
});
Route::get('/networking', function () {
    return view('networking');
});

Route::get('/micro', function () {
    return view('microprocessor');
});
//upload file
Route::get('data','DataController@showdataform')->name('upload.file');
Route::post('data','DataController@storefile');

//commentbox
Route::post('store','cmboxController@store');
Route::get('cmnt', 'cmboxController@index');
Route::get('show','showcmntController@index');
