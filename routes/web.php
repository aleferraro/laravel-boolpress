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
    return redirect('/post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('free-zone')
    ->group(function () {
    Route::get('hello', 'TestController@guest')

    ->name('guestHome');
});

Route::prefix('restricted-zone')
    ->middleware('auth')
    ->group(function () {
    Route::get('hello', 'TestController@logged')

    ->name('loggedHome');
});

Route::resource('post', 'PostController')->except('index', 'show')->middleware('auth');

Route::resource('post', 'PostController')->only('index', 'show');
