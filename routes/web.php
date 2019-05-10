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

Route::get('/edit', function (){
   return view('edit');
});

Route::get('/personal_data',function (){
   return view('personal');
});

Route::get('/profile', function (){
   return view('profile');
});

Route::get('/signup',function (){
   return view('signup');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
