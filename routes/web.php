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


Use App\Http\Controllers\User\AnnouncementController;
Use App\Http\Controllers\User\CompetitionController;
Use App\Http\Controllers\User\EventController;
Use App\Http\Controllers\User\GalleryController;
Use App\Http\Controllers\User\NewsUserController;
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
Route::get('news_details/{id}', [UserViewController::class, 'news_detials'])->name('news_details');


Route::get('events', [UserViewController::class, 'events'])->name('events');

Route::get('event_details/{id}', [UserViewController::class, 'event_detials'])->name('event_detials');
Route::get('gallery_details/{id}', [UserViewController::class, 'gallery_details'])->name('gallery_details');

Route::get('compotitions', [UserViewController::class, 'compititions'])->name('compititions');
Route::get('compotition_details/{id}', [UserViewController::class, 'compotition_details'])->name('comptition_details');

Route::get('announcement', [UserViewController::class, 'ammouncement'])->name('announcements');
Route::get('announcement_details/{id}', [UserViewController::class, 'announcement_details'])->name('announcementdetails');

Route::get('contact', [UserViewController::class, 'contact'])->name('contact');
Route::get('videos', [UserViewController::class, 'videos'])->name('videos');


Route::post('addNewslike',[NewsUserController::class, 'addNewsLike'])->name('addNewsLike');
Route::post('deleteNewslike',[NewsUserController::class, 'deleteNewsLike'])->name('deleteNewsLike');
Route::post('addNewscomment',[NewsUserController::class, 'addNewscomment'])->name('addNewscomment');

Route::post('addEventslike',[EventController::class, 'addEventsLike'])->name('addEventsLike');
Route::post('deleteEventslike',[EventController::class, 'deleteEventsLike'])->name('deleteEventsLike');
Route::post('addEventcomment',[EventController::class, 'addEventscomment'])->name('addEventscomment');

Route::post('addcomplike',[CompetitionController::class, 'addcompLike'])->name('addcompLike');
Route::post('deletecomplike',[CompetitionController::class, 'deletecompLike'])->name('deletecompLike');
Route::post('addcompcomment',[CompetitionController::class, 'addcompcomment'])->name('addcompcomment');

Route::post('addannouncementlike',[AnnouncementController::class, 'addannouncementLike'])->name('addannouncementLike');
Route::post('deleteannouncementlike',[AnnouncementController::class, 'deleteannouncementLike'])->name('deleteannouncementLike');
Route::post('addannouncementcomment',[AnnouncementController::class, 'addannouncementcomment'])->name('addannouncementcomment');


Route::post('addgallerylike',[GalleryController::class, 'addgalleryLike'])->name('addgalleryLike');
Route::post('deletegallerylike',[GalleryController::class, 'deletegalleryLike'])->name('deletegalleryLike');
Route::post('addgallerycomment',[GalleryController::class, 'addgallerycomment'])->name('addgallerycomment');



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