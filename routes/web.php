<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/form', 'HomeController@form')->name('form');
Route::get('/table', 'HomeController@table')->name('table');
Route::get('/icon', 'HomeController@icon')->name('icon');
Route::get('/blank', 'HomeController@blank')->name('blank');
Route::get('/liste', 'HomeController@liste')->name('liste');
