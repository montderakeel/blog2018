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
    return view('welcome');
})->name('root');

Route::get('login', 'AuthController@ShowLoginForm')->name('getLogin');
Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::get('/edit-profile', 'ProfileController@editProfile')->name('edit.profile')->middleware('auth');
Route::put('/profile', 'ProfileController@updateProfile')->name('update.profile')->middleware('auth');

Route::resource('/tvshow', 'TvshowController')->middleware('auth');