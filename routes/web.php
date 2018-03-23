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
Route::get('/nouvelle', 'MyController@nouvelle')->middleware('auth');
Route::post('/creer', 'MyController@creer')->middleware('auth');
Route::get('/edit', 'MyController@edit');
Route::post('/edit', 'MyController@update_pics');
Route::get('/suivi/{id}','MyController@suivi')->middleware('auth')->where('id','[0-9]+');
Route::get('/recherche/{s}','MyController@recherche');
Route::get('/program', 'MyController@program')->middleware('auth')->where('id','[0-9]+');
Route::get('/muscles', 'MyController@muscles');
Route::get('/muscles', 'MyController@muscles');
Route::get('/accueil', 'MyController@accueil')->middleware('auth');
Route::get('/deletepubli/{id}','MyController@delete')->middleware('auth')->where('id','[0-9]+');

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

