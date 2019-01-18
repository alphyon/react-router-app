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


Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/adminprofile', function () {
        return view('profile.menuprofile');
    });
    Route::resource('shop', 'ShopController');
    Route::resource('product', 'ProductController');
    Route::resource('transaction', 'OrderController');
    Route::resource('details','UserDetailsController');



});


Route::get('/home', 'HomeController@index')->name('home');
