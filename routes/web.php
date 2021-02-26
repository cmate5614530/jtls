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

//Route::get('/', function () {
//    return view('main');
//});
Route::get('/', 'MainController@index')->name('index');
//Route::get('/index', 'MainController@index')->name('index');
Route::get('/contact-us','MainController@contactus')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

