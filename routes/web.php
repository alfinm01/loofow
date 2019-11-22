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

Auth::routes();

Route::get('/', 'Post\ListPost@listAllItems');


Route::get('/search', 'Post\ListPost@listByKeywords');

Route::get('/post/{id}', 'Post\CRUDPost@getById');

Route::get('/dashboard', 'Post\ListPost@listByUser');
    

Route::get('/profile', function () {
    return view('pages/profile');
})->middleware('auth');

Route::post('task/template', 'Post\CRUDPost@create')->name('create-post')->middleware('auth');

Route::get('/create-post', function () {
    return view('pages/create-post');
})->middleware('auth');

Route::get('/verification/{id}', 'Post\Verifikasi@postVerifikasi')->middleware('auth')->name('verification');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/claim-post/{id}', 'PostController@claimPosts')->middleware('auth');

Route::get('/get-claimed-post', 'PostController@getClaimedPosts');

Route::get('/edit-post/{id}', 'Post\CRUDPost@editRespons')->name('edit-post');
