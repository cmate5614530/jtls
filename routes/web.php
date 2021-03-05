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

Route::get('/', 'MainController@index')->name('index');
Route::get('/contact-us','MainController@contactus')->name('contactus');
Route::get('/404-page', 'MainController@nopage')->name('404-page');

Auth::routes();

Route::get('/user_home', 'HomeController@index')->middleware('role:user')->name('user.home');
Route::get('/user_dashboard','HomeController@user_dashboard')->middleware('role:user')->name('user.dashboard');

Route::get('/admin_dashboard','HomeController@admin_dashboard')->middleware('role:admin')->name('admin.dashboard');
