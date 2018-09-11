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

Route::get('/', function(){
    if(Auth::check()){
        return redirect('accueil');
    }
    else{
        return view('index', ['title' => 'Accueil']);
    }
});

Route::get('/profile/{id}', 'MyController@utilisateur')->middleware('auth')->where('id','[0-9]+');
Route::get('/nouvelle', 'MyController@nouvelle')->middleware('auth');
Route::get('/nouvelle2', 'MyController@nouvelle2')->middleware('auth');
Route::get('/search','SearchController@search');
Route::post('/creer', 'MyController@creer')->middleware('auth');
Route::post('/programmeur', 'MyController@programmeur')->middleware('auth');
Route::get('/edit', 'MyController@edit');
Route::get('/prog/{id}', 'MyController@prog')->middleware('auth')->where('id','[0-9]+');
Route::post('/edit', 'MyController@update_pics');
Route::get('/suivi/{id}','MyController@suivi')->middleware('auth')->where('id','[0-9]+');
Route::get('/timer','MyController@timer');
Route::get('/map','MyController@map');
Route::get('/followers/{id}','MyController@followers')->middleware('auth')->where('id','[0-9]+');
Route::get('/follows/{id}','MyController@follows')->middleware('auth')->where('id','[0-9]+');
Route::get('/program', 'MyController@muscles')->middleware('auth')->where('id','[0-9]+');;
Route::get('/muscles/{id}', 'MyController@exercices')->where('id','[0-9]+');
Route::get('/exercices/{id}', 'MyController@fiche_exercices')->where('id','[0-9]+');
Route::get('/programmes/{id}', 'MyController@fiche_programmes')->where('id','[0-9]+');
Route::get('/accueil', 'MyController@accueil')->middleware('auth')->where('id','[0-9]+');
Route::get('/deletepubli/{id}','MyController@delete')->middleware('auth')->where('id','[0-9]+');
Route::get('/deleteprog/{id}','MyController@deleteprog')->middleware('auth')->where('id','[0-9]+');
Route::get('/deleteexo/{id}','MyController@deleteexo')->middleware('auth')->where('id','[0-9]+');
Route::get('/liker/{id}', 'MyController@liker')->middleware('auth')->where('id','[0-9]+');
Route::get('/unliker/{id}', 'MyController@unliker')->middleware('auth')->where('id','[0-9]+');
Route::get('/liker2/{id}', 'MyController@liker2')->middleware('auth')->where('id','[0-9]+');
Route::get('/unliker2/{id}', 'MyController@unliker2')->middleware('auth')->where('id','[0-9]+');
Route::post('/add_exo', 'MyController@add_exo')->middleware('auth')->where('id','[0-9]+');

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

