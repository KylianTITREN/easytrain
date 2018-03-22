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

Route::get('/profile/{id}', 'MyController@utilisateur')->middleware('auth')->where('id','[0-9]+');
Route::get('/edit', 'MyController@edit');
Route::post('/edit', 'MyController@update_pics');
Route::get('/suivi/{id}','MyController@suivi')->middleware('auth')->where('id','[0-9]+');
Route::get('/recherche/{s}','MyController@recherche');


Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/accueil', 'HomeController@accueil')->name('accueil')->middleware('auth');
Route::get('/program', 'HomeController@program')->name('program')->middleware('auth');
Route::get('/muscles', 'HomeController@muscles')->name('muscles')->middleware('auth');
Route::get('/muscles/exercices/{id}', 'HomeController@exercices')->name('exercices')->where('id', '[0-9]+');
