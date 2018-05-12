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

Route::get('/','pagesController@index')->name('home');
Route::get('/about','pagesController@about');
Route::get('/services','pagesController@services');

Route::get('/logo/{filename}', 'ImageController@returnLogo')->name('logo');
Route::get('/cover-pic/{filename}', 'ImageController@returnCover')->name('cover');


Route::resource('posts','postsController');
Auth::routes();

Route::get('/admin-dashboard', 'AdminDashboardController@index'); 
Route::get('/admin-dashboard/{id}','AdminDashboardController@publish');
Route::post('/change-logo', 'AdminDashboardController@changeLogo');