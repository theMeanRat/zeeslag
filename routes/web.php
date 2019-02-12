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
app()->singleton('App\Puppy', function() {
	return new \App\Puppy('Dotje');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('gameTypes', 'GameTypeController');

Route::resource('players', 'PlayerController');

Route::resource('games', 'GameController')->middleware('auth');
Route::patch('/games/{game}', 'GameController@update')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
