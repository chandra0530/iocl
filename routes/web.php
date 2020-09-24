<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.home');
});
Route::get('/news', function () {
    return view('user.news');
});
Route::get('/news_details', function () {
    return view('user.news_details');
});


Route::get('/events', function () {
    return view('user.events');
});
Route::get('/compotitions', function () {
    return view('user.competitions');
});
Route::get('/announcement', function () {
    return view('user.announcement');
});
Route::get('/gallery', function () {
    return view('user.gallery');
});
Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('admin', function () {
    return view('admin.home');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});