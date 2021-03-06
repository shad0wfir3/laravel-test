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

Route::get('/','SiteController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@index')->name('admin');

//We would normally define authentication route params here, but for this purpose the controllers has been initialised with an auth constructor
Route::prefix('admin')->group(function(){
    Route::resource('articles','ArticleController');
    Route::resource('categories','CategoryController');
    Route::resource('tags','TagController');
});

