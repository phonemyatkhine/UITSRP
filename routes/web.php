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
    return view('home');
});


Auth::routes();

Route::get('/user_login', function() {
    return view('auth.user_login');
});

Route::get('/user_register',function() {
    return view('/user_register');
});

Route::get('/home', 'HomeController@index')->name('home');
