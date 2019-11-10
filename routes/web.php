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
    return view('pages/home');
});
Route::get('/search', function () {
    return view('pages/search');
});
Route::get('/post', function () {
    return view('pages/post');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/dashboard', function () {
    return view('pages/dashboard');
});
Route::get('/create-post', function () {
    return view('pages/create-post');
});