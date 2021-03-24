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

Route::group(['middleware' => ['role:user']], function(){
    Route::get('/user-home', 'HomeController@index')->name('user.home');
    Route::get('/user-dashboard','HomeController@user_dashboard')->name('user.dashboard');
    Route::get('/user-bets-detail', 'HomeController@bets_detail')->name('user.betsdetail');
    Route::post('/place-bets', 'HomeController@save_bets');
    Route::post('/user-get-bets', 'HomeController@get_bets')->name('user.getbets');
});

Route::group(['middleware' => ['role:admin']], function (){
    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('/users','AdminController@users')->name('admin.users');
    Route::get('/profile','AdminController@profile')->name('admin.profile');
    Route::get('/bets', 'AdminController@bets')->name('admin.bets');
    Route::post('/save-user', 'AdminController@save_user')->name('admin.saveuser');
    Route::post('/save-payout', 'AdminController@save_payout');
    Route::post('/save-edit','AdminController@save_edit')->name('admin.saveedit');
    Route::post('/del-user','AdminController@del_user')->name('admin.deluser');
    Route::post('/del-bet','AdminController@del_bet');
    Route::post('/save-password', 'AdminController@save_password')->name('admin.password.save');
});
