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

// Controladores de la Pagina Principal



Route::get('/','FrontController@index')->name('index');

Route::get('show/{id}','FrontController@show')->name('show');


Route::resource('approvals','ApprovalsController');

Route::resource('carousel', 'CarouselController');

Route::resource('music','MusicController');

//Route::get('/music/','MusicController')->name('music.index');

Route::resource('cinema','CinemaController');

Route::resource('move','MoveController');

Route::resource('post','PostController');

Route::resource('concert','ConcertController');

Route::resource('random','RandomController');

Route::resource('contact','ContactController');




// Controladores de la Panel de Administrador

Route::resource('articles', 'ArticleController');

Route::resource('advertising','AdvertisingController');

Auth::routes();

Route::resource('users','UsersController');

Route::resource('log','LogController');

Route::resource('cPanel','CpanelController');


