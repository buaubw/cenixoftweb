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
Route::group(['middleware' => 'web'], function() {
  Route::get('addmoreinfo', 'HomeController@addmoreinfo');
Route::post('addinfo/{addinfo}', 'HomeController@addinfo');
Route::get('/', 'HomeController@index');
Route::get('home/website/{id}', 'HomeController@website');
Route::get('home/logo/{id}', 'HomeController@logo');
Route::get('home/mobile/{id}', 'HomeController@mobile');
Route::get('document/uploadDoc/{id}', 'DocumentController@uploadDoc');
Route::get('document/document/{id}', 'DocumentController@document');
Route::post('document/feedback', 'DocumentController@feedback');
Route::resource('document', 'DocumentController');
Route::resource('education', 'EducationController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
