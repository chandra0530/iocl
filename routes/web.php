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


Use App\Http\Controllers\User\UshareCommentController;
Use App\Http\Controllers\User\UshareLikeController;
Use App\Http\Controllers\UshareTypeController;

Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\UserViewController;
Use App\Http\Controllers\UShareController;
Use App\Http\Controllers\User\AnnouncementController;
Use App\Http\Controllers\User\CompetitionController;
Use App\Http\Controllers\User\EventController;
Use App\Http\Controllers\User\GalleryController;
Use App\Http\Controllers\User\NewsUserController;
Use App\Http\Controllers\Admin\AuthController as AdminAuthController;
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




Route::get('/', [UserViewController::class, 'home'])->name('home');
Route::get('profile', [UserViewController::class, 'profile'])->name('profile');
Route::post('profile', [UserViewController::class, 'updateprofile'])->name('update_profile');
Route::get('news', [UserViewController::class, 'news'])->name('news');
Route::get('news_details/{id}', [UserViewController::class, 'news_detials'])->name('news_details');


Route::get('events', [UserViewController::class, 'events'])->name('events');

Route::get('event_details/{id}', [UserViewController::class, 'event_detials'])->name('event_detials');
Route::get('gallery_details/{id}', [UserViewController::class, 'gallery_details'])->name('gallery_details');

Route::get('compotitions', [UserViewController::class, 'compititions'])->name('compititions');
Route::get('compotition_details/{id}', [UserViewController::class, 'compotition_details'])->name('comptition_details');

Route::get('ushare', [UShareController::class, 'index'])->name('ushare_index');
Route::post('ushare', [UShareController::class, 'store'])->name('ushare_store');
Route::get('ushare/{id}', [UShareController::class, 'show'])->name('ushare_show');


Route::get('announcement', [UserViewController::class, 'ammouncement'])->name('announcements');
Route::get('announcement_details/{id}', [UserViewController::class, 'announcement_details'])->name('announcementdetails');

Route::get('contact', [UserViewController::class, 'contact'])->name('contact');
Route::get('videos', [UserViewController::class, 'videos'])->name('videos');
Route::get('/login', [UserViewController::class, 'login'])->name('login');
Route::get('/signup',[UserViewController::class, 'signup'])->name('signup');


Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('addNewslike/{userid}/{newsid}',[NewsUserController::class, 'addNewsLike'])->name('addNewsLike');
Route::get('deleteNewslike/{userid}/{newsid}',[NewsUserController::class, 'deleteNewsLike'])->name('deleteNewsLike');

Route::get('addUsharelike/{userid}/{newsid}',[UshareLikeController::class, 'addUshareLike'])->name('addUshareLike');
Route::get('deleteUsharelike/{userid}/{newsid}',[UshareLikeController::class, 'deleteUshareLike'])->name('deleteUshareLike');
Route::post('addUsharecomment',[UshareLikeController::class, 'addUsharecomment'])->name('addUsharecomment');


Route::post('addNewscomment',[NewsUserController::class, 'addNewscomment'])->name('addNewscomment');

Route::get('addEventslike/{userid}/{eventid}',[EventController::class, 'addEventsLike'])->name('addEventsLike');
Route::get('deleteEventslike/{userid}/{eventid}',[EventController::class, 'deleteEventsLike'])->name('deleteEventsLike');
Route::post('addEventcomment',[EventController::class, 'addEventscomment'])->name('addEventscomment');

Route::get('addcomplike/{userid}/{compid}',[CompetitionController::class, 'addcompLike'])->name('addcompLike');
Route::get('deletecomplike/{userid}/{compid}',[CompetitionController::class, 'deletecompLike'])->name('deletecompLike');
Route::post('addcompcomment',[CompetitionController::class, 'addcompcomment'])->name('addcompcomment');

Route::get('addannouncementlike/{userid}/{announcementid}',[AnnouncementController::class, 'addannouncementLike'])->name('addannouncementLike');
Route::get('deleteannouncementlike/{userid}/{announcementid}',[AnnouncementController::class, 'deleteannouncementLike'])->name('deleteannouncementLike');
Route::post('addannouncementcomment',[AnnouncementController::class, 'addannouncementcomment'])->name('addannouncementcomment');


Route::get('addgallerylike/{userid}/{galleryid}',[GalleryController::class, 'addgalleryLike'])->name('addgalleryLike');
Route::get('deletegallerylike/{userid}/{galleryid}',[GalleryController::class, 'deletegalleryLike'])->name('deletegalleryLike');
Route::post('addgallerycomment',[GalleryController::class, 'addgallerycomment'])->name('addgallerycomment');
Route::post('publishreview',[CompetitionController::class, 'publishreview'])->name('publishreview');



Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class ,'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class ,'login'])->name('admin.login.validate');
    
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('gallery/event/add', [GalleryEventsController::class, 'create']);

    Route::get('gallery/event/{id}', [GalleryEventsController::class, 'destroy'])->name('galleryevents.destroy');
    

    Route::post('gallery/event', [GalleryEventsController::class, 'store'])->name('event.store');
    Route::get('gallery/event', [GalleryEventsController::class, 'index']);
    Route::get('gallery/eventprictures/add', [GalleryEventPicturesController::class, 'create']);
    Route::get('gallery/eventpricturesactive/{id}', [GalleryEventPicturesController::class, 'active'])->name('galleryeventpicture.active');

    Route::post('gallery/eventpictures', [GalleryEventPicturesController::class, 'store'])->name('galleryevent.store');
    Route::get('gallery/eventpictures', [GalleryEventPicturesController::class, 'index']);
    Route::get('news/delete/{id}', [NewsController::class,'destroy'])->name('news.destroy');
    Route::get('news/newsactive/{id}', [NewsController::class, 'active'])->name('news.active');
    Route::resource('news', NewsController::class);
    Route::get('events/delete/{id}', [EventsController::class,'destroy'])->name('events.destroy');
    Route::get('events/eventsactive/{id}', [EventsController::class, 'active'])->name('events.active');
    Route::resource('events', EventsController::class);
    Route::get('compititions/delete/{id}', [CompititionsController::class,'destroy'])->name('compititions.destroy');
    Route::get('compititions/compactive/{id}', [CompititionsController::class, 'active'])->name('compititions.active');
    Route::get('compititions/upload-request', [CompititionsController::class, 'uploadRequests'])->name('compititions.upload-request');
    
    Route::get('compititions/publish_request/{id}', [CompititionsController::class, 'publish_request'])->name('compititions.publish_request');
    Route::get('compititions/reject_request/{id}', [CompititionsController::class, 'reject_request'])->name('compititions.reject_request');
    Route::get('compititions/comments/{id}', [CompititionsController::class, 'comments_list'])->name('compititions.comments_list');
    Route::get('compititions/comment_delete/{id}', [CompititionsController::class, 'comments_delete'])->name('compititions.comment_delete');


    Route::resource('compititions', CompititionsController::class);
    Route::get('announcements/delete/{id}', [AnnouncementsController::class,'destroy'])->name('announcements.destroy');
    Route::get('announcements/announcementactive/{id}', [AnnouncementsController::class, 'active'])->name('announcement.active');
    Route::resource('announcements', AnnouncementsController::class);
    Route::get('employes/delete/{id}', [EmployesController::class, 'destroy'])->name('employes.destroy');
    Route::get('employes/active/{id}', [EmployesController::class, 'active'])->name('employes.active');
    Route::get('employes/post/delete/{id}', [EmployesController::class, 'postdestroy'])->name('employespost.destroy');
    Route::get('employes/post/active/{id}', [EmployesController::class, 'postactive'])->name('employespost.active');
    Route::get('employes/posts', [EmployesController::class, 'posts'])->name('employes.posts');
    Route::post('employes/update_password', [EmployesController::class, 'updateemployepassword'])->name('employes.updatepassword');
    Route::resource('employes', EmployesController::class);

    Route::get('ushare/comments/{id}', [UShareController::class, 'comments_list'])->name('ushare.comments_list');
    Route::get('ushare/comment_delete/{id}', [UShareController::class, 'comments_delete'])->name('ushare.comment_delete');


    Route::get('ushare/types',[UshareTypeController::class, 'index']);
    Route::post('ushare/types',[UshareTypeController::class, 'store'])->name('ushare_type.store');
    Route::get('ushare/types/{id}',[UshareTypeController::class, 'destroy'])->name('ushare_type.delete');
   
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('auth.logout');

});


Route::prefix('/')->group(function () {
    Route::get('gallery', [FrontEndController::class, 'showGallery'])->name('user.gallery');
});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});