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
use Illuminate\Support\Facades\Route;
use Morilog\Jalali\Jalalian;


Route::get('/','IndexController@index')->name('/');
Route::get('/register','UserController@create')->name('register');
Route::post('/register/store','UserController@store')->name('register.store');
Route::get('/event/{id}','EventController@index')->name("event");
Route::get('/profile/{slug}','UserController@index')->name("profile");
Route::get('404',function (){
    return view("404");
});
