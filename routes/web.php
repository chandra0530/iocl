<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\GalleryEventsController;
use App\Http\Controllers\Admin\GalleryEventPicturesController;
use App\Http\Controllers\Admin\NewsController;

use App\Http\Controllers\Admin\AnnouncementsController;
use App\Http\Controllers\Admin\CompititionsController;
use App\Http\Controllers\Admin\EmployesController;
use App\Http\Controllers\Admin\EventsController;

Use App\Http\Controllers\User\FrontEndController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\UserViewController;
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

Route::get('/login', function () {
    return view('user.login');
});
Route::get('/signup', function () {
    return view('user.signup');
});
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/', [UserViewController::class, 'home'])->name('home');
Route::get('news', [UserViewController::class, 'news'])->name('news');
Route::get('news_details', [UserViewController::class, 'news_detials'])->name('news_details');
Route::get('events', [UserViewController::class, 'events'])->name('events');
Route::get('compotitions', [UserViewController::class, 'compititions'])->name('compititions');
Route::get('announcement', [UserViewController::class, 'ammouncement'])->name('announcements');
Route::get('contact', [UserViewController::class, 'contact'])->name('contact');
Route::get('videos', [UserViewController::class, 'videos'])->name('videos');


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('gallery/event/add', [GalleryEventsController::class, 'create']);

    Route::get('gallery/event/{id}', [GalleryEventsController::class, 'destroy'])->name('galleryevents.destroy');
    Route::post('gallery/event', [GalleryEventsController::class, 'store'])->name('event.store');
    Route::get('gallery/event', [GalleryEventsController::class, 'index']);
    Route::get('gallery/eventprictures/add', [GalleryEventPicturesController::class, 'create']);

    Route::post('gallery/eventpictures', [GalleryEventPicturesController::class, 'store'])->name('galleryevent.store');
    Route::get('gallery/eventpictures', [GalleryEventPicturesController::class, 'index']);
    Route::get('news/delete/{id}', [NewsController::class,'destroy'])->name('news.destroy');
    Route::resource('news', NewsController::class);
    Route::get('events/delete/{id}', [EventsController::class,'destroy'])->name('events.destroy');
    Route::resource('events', EventsController::class);
    Route::get('compititions/delete/{id}', [CompititionsController::class,'destroy'])->name('compititions.destroy');
    Route::resource('compititions', CompititionsController::class);
    Route::get('announcements/delete/{id}', [AnnouncementsController::class,'destroy'])->name('announcements.destroy');
    Route::resource('announcements', AnnouncementsController::class);
    Route::resource('employes', EmployesController::class);

   
});


Route::prefix('/')->group(function () {
    Route::get('gallery', [FrontEndController::class, 'showGallery'])->name('user.gallery');
});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});