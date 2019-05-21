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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/edit/{id}','EditController@index');

Route::post('/edit/{id}/save','EditController@save');

Route::get('/personal_data','PersonalDataController@index');

Route::get('/profile','ProfileController@index');

Route::get('/signup','SignupController@index');

Route::post('/signup/complete','SignupController@edit');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
