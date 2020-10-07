<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\GalleryEventsController;
use App\Http\Controllers\Admin\GalleryEventPicturesController;
Use App\Http\Controllers\User\FrontEndController;
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
// Route::get('/gallery', function () {
//     return view('user.gallery');
// });
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/videos', function () {
    return view('user.videos');
});


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('gallery/event/add', [GalleryEventsController::class, 'create']);

    Route::get('gallery/event/{id}', [GalleryEventsController::class, 'destroy'])->name('galleryevents.destroy');
    Route::post('gallery/event', [GalleryEventsController::class, 'store'])->name('event.store');
    Route::get('gallery/event', [GalleryEventsController::class, 'index']);
    Route::get('gallery/eventprictures/add', [GalleryEventPicturesController::class, 'create']);

    Route::post('gallery/eventpictures', [GalleryEventPicturesController::class, 'store'])->name('galleryevent.store');
    Route::get('gallery/eventpictures', [GalleryEventPicturesController::class, 'index']);
   
});


Route::prefix('/')->group(function () {
    Route::get('gallery', [FrontEndController::class, 'showGallery'])->name('user.gallery');
});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});