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

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/search', 'Post\ListPost@listByKeywords');

Route::get('/post/{id}', 'Post\CRUDPost@getById');

Route::get('/dashboard', 'Post\ListPost@listByUserFound');
    

Route::get('/profile', function () {
    return view('pages/profile');
})->middleware('auth');

Route::post('task/template', 'Post\CRUDPost@create')->name('create-post');

Route::get('/create-post', function () {
    return view('pages/create-post');
})->middleware('auth');

Route::post('/verification', function () {
    return view('pages/verification');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/claim-post', 'PostController@claimPosts');

Route::get('/get-claimed-post', 'PostController@getClaimedPosts');

Route::get('/edit-post/{id}', 'Post\CRUDPost@editRespons');