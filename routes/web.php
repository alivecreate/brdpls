<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\IsCheckLogin;
use App\Http\Middleware\CheckBusinessStatus;
use App\Http\Middleware\RedirectIfPageExpired;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupMembersController;
use App\Http\Controllers\GroupReportController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MyBusinessController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SocialShareController;




Route::get('/theme', [PageController::class, 'theme'])->name('theme');
                                                                                               

Route::get('/', [PageController::class, 'index'])->name('index')->middleware(ValidUser::class);

Route::get('/messages', [PageController::class, 'messages'])->name('messages')->middleware(ValidUser::class);

Route::get('/video', [PageController::class, 'video'])->name('video')->middleware(ValidUser::class);

Route::get('/video-watch', [PageController::class, 'videoWatch'])->name('video-watch')->middleware(ValidUser::class);

Route::get('/event', [PageController::class, 'event'])->name('event')->middleware(ValidUser::class);

Route::get('/event-2', [PageController::class, 'event2'])->name('event-2')->middleware(ValidUser::class);

Route::get('/pages', [PageController::class, 'pages'])->name('pages')->middleware(ValidUser::class);

Route::get('/timeline-page', [PageController::class, 'timelinePage'])->name('timeline-page')->middleware(ValidUser::class);

Route::get('/timeline', [PageController::class, 'timeline'])->name('timeline')->middleware(ValidUser::class);

Route::get('/timeline-event', [PageController::class, 'timelineEvent'])->name('timeline-event')->middleware(ValidUser::class);

Route::get('/timeline-funding', [PageController::class, 'timelineFunding'])->name('timeline-funding')->middleware(ValidUser::class);


// Route::get('/group/{slug}', [PageController::class, 'groupDetail'])->name('groupDetail')->middleware(ValidUser::class);


Route::get('/groups-2', [PageController::class, 'groups2'])->name('groups-2')->middleware(ValidUser::class);

Route::get('/group-form', [PageController::class, 'groupForm'])->name('group-form')->middleware(ValidUser::class);

Route::get('/group/edit/{id}', [PageController::class, 'groupformEdit'])->name('group-edit')->middleware(ValidUser::class);

Route::get('/products', [PageController::class, 'product'])->name('products')->middleware(ValidUser::class);

Route::get('/product-view-1', [PageController::class, 'product1'])->name('product-view-1')->middleware(ValidUser::class);

Route::get('/product-view-2', [PageController::class, 'product2'])->name('product-view-2')->middleware(ValidUser::class);

Route::get('/blog', [PageController::class, 'blog'])->name('blog')->middleware(ValidUser::class);

Route::get('/blog-2', [PageController::class, 'blog2'])->name('blog-2')->middleware(ValidUser::class);

Route::get('/blog-read', [PageController::class, 'blogRead'])->name('blog-read')->middleware(ValidUser::class);

Route::get('/games', [PageController::class, 'games'])->name('games')->middleware(ValidUser::class);

Route::get('/funding', [PageController::class, 'funding'])->name('funding')->middleware(ValidUser::class);

Route::get('/setting', [PageController::class, 'setting'])->name('setting')->middleware(ValidUser::class);

Route::get('/upgrade', [PageController::class, 'upgrade'])->name('upgrade');

// Route::get('/business-form', [PageController::class, 'businessForm'])->name('business-form')->middleware(ValidUser::class);

Route::get('/home', [PageController::class, 'home'])->name('home')->middleware(ValidUser::class);


// Route::post('/users', [UserController::class, 'store'])->name('user.store');

Route::resource('users', UserController::class);

Route::resource('posts', PostsController::class);

Route::resource('social_links', SocialLinkController::class);

Route::resource('security', SecurityController::class);

Route::resource('group', GroupController::class);

Route::resource('group-member', GroupMembersController::class);
Route::resource('group-report', GroupReportController::class);

Route::resource('business', BusinessController::class);
Route::get('/business-list', [BusinessController::class, 'businessList'])->name('businessList');

Route::get('/business-list/step-2', [BusinessController::class, 'step2ContactDetail'])->name('step2ContactDetail');
Route::post('/business-list/step-2', [BusinessController::class, 'storeStep2ContactDetail'])->name('storeStep2ContactDetail');

Route::get('/business-list/step-3-timing', [BusinessController::class, 'step3BusinessTimining'])->name('step3BusinessTimining');

Route::post('/business-list/step-3-timing', [BusinessController::class, 'storeBusinessTimining'])->name('storeBusinessTimining');

Route::get('/business-list/step-4-category', [BusinessController::class, 'step4BusinessCategory'])->name('step4BusinessCategory');
Route::post('/business-list/step-4-category', [BusinessController::class, 'storeStep4BusinessCategory'])->name('storeStep4BusinessCategory');


Route::get('/components', [PageController::class, 'components'])->name('components');


Route::get('/test/rss', [TestController::class, 'rssFeed'])->name('rssFeed');


// Auth User

// Route::get('/login', [PageController::class, 'login'])->name('login');
// Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/register', [PageController::class, 'register'])->name('register')->middleware(IsCheckLogin::class);

Route::get('login', [PageController::class, 'login'])->name('login')->middleware(IsCheckLogin::class);

Route::post('auth/check-auth', [UserController::class, 'checkAuth'])->name('checkAuth');

Route::get('auth/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/share-whatsapp', [SocialShareController::class, 'whatsappShare'])->name('whatsappShare');



Route::middleware(ValidUser::class)->group(function () {

Route::get('/my-business', [MyBusinessController::class, 'index'])->name('myBusiness');
Route::get('/my-business/{cid}', [MyBusinessController::class, 'show'])->name('myBusiness.show');

Route::put('/my-business/{cid}/profile', [MyBusinessController::class, 'updateMyBusinessProfile'])->name('updateMyBusinessProfile');
Route::put('/my-business/{cid}/sociallinks', [MyBusinessController::class, 'updateMyBusinessSocialLinks'])->name('updateMyBusinessSocialLinks');
Route::put('/my-business/{cid}/contact', [MyBusinessController::class, 'updateMyBusinessContact'])->name('updateMyBusinessContact');
Route::delete('/my-business/{id}', [MyBusinessController::class, 'deleteMyBusiness'])->name('deleteMyBusiness');


Route::get('/{slug}', [ListingController::class, 'listing'])->name('listingList');
});
























