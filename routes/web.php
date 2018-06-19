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

//Route::get('show/{id}','FrontController@show')->name('show');


Route::resource('subscribers', 'SubscribersController');

Route::resource('approvals','ApprovalsController');

Route::resource('carousel', 'CarouselController');

Route::resource('music','MusicController');

//Route::get('/music/','MusicController')->name('music.index');

Route::resource('cinema','CinemaController');

Route::resource('move','MoveController');

Route::resource('sessionsis','SessionsISController');

Route::resource('concert','ConcertController');

Route::resource('entertainment','EntertainmentController');

Route::resource('contact','ContactController');

Route::resource('home','FrontController');





// Controladores de la Panel de Administrador

Route::resource('articles', 'ArticleController');

Route::resource('videos','VideosController');

Auth::routes();

Route::resource('users','UsersController');

Route::resource('log','LogController');

Route::resource('cPanel','CpanelController');

Route::resource('popups','PopupController');


//Route::get('images/{filename}', function ($filename)
//{
//    return Image::make(public_path('images/' . $filename))->response();
//});