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
    return view('index', ['title' => 'Accueil']);
});

Route::get('/profile', 'loginController@login');
Route::get('/edit', 'MyController@edit');
Route::post('/edit', 'MyController@update_pics');


Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/profile', 'HomeController@index')->name('profile');
Route::get('/accueil', 'HomeController@accueil')->name('accueil');
Route::get('/program', 'HomeController@program')->name('program');
Route::get('/muscles', 'HomeController@muscles')->name('muscles');
Route::get('/muscles/exercices/{id}', 'HomeController@exercices')->name('exercices')->where('id', '[0-9]+');
