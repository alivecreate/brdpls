<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\IsCheckLogin;
use App\Http\Middleware\CheckBusinessStatus;
use App\Http\Middleware\RedirectIfPageExpired;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GroupPostController;
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
use App\Http\Controllers\GaneshFestivalController;
use App\Http\Controllers\GaneshFestivalGroupController;
use App\Http\Controllers\GaneshFestivalCompetition;
use App\Http\Controllers\FestivalCompetitionVoting;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LiveCompetitionStatus;
use App\Http\Controllers\GaneshCompetitionPaymentController;







Route::get('/theme', [PageController::class, 'theme'])->name('theme');
                                                                                               

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/refund-and-cancellation', [PageController::class, 'refundAndCancellation'])->name('refundAndCancellation');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

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
Route::resource('group-posts', GroupPostController::class);



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
Route::get('/test/create-collage', [TestController::class, 'createCollage'])->name('createCollage');





// Auth User

// Route::get('/login', [PageController::class, 'login'])->name('login');
// Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/registration', [PageController::class, 'registration'])->name('registration')->middleware(IsCheckLogin::class);
Route::get('/user-verification', [PageController::class, 'userVerification'])->name('userVerification');

Route::post('/user-verification', [PageController::class, 'checkUserVerification'])->name('checkUserVerification');

Route::get('login', [PageController::class, 'login'])->name('login')->middleware(IsCheckLogin::class);

Route::get('forgot-pw', [PageController::class, 'forgotPW'])->name('forgotPW')->middleware(IsCheckLogin::class);
Route::post('forgot-pw', [PageController::class, 'forgotPWPost'])->name('forgotPWPost')->middleware(IsCheckLogin::class);
Route::post('forgot-pw-verification', [PageController::class, 'checkForgotPwVerification'])->name('checkForgotPwVerification')->middleware(IsCheckLogin::class);
Route::get('change-pw', [PageController::class, 'newPassword'])->name('newPassword')->middleware(IsCheckLogin::class);


Route::post('auth/check-auth', [UserController::class, 'checkAuth'])->name('checkAuth');
Route::post('auth/save-change-pw', [UserController::class, 'saveChangePassword'])->name('saveChangePassword');



Route::post('setting/update-profile-pic', [UserController::class, 'updateProfilePic'])->name('updateProfilePic');



Route::get('auth/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/share-whatsapp', [SocialShareController::class, 'whatsappShare'])->name('whatsappShare');



Route::get('/create-order', [PaymentController::class, 'createOrder'])->name('payment.create');
Route::post('/payment-callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');

Route::get('/ganesh-festival/payment-success', [GaneshCompetitionPaymentController::class, 'competitionPaymentSuccess'])->name('competitionPaymentSuccess');
Route::get('/ganesh-festival/payment-failed', [GaneshCompetitionPaymentController::class, 'competitionPaymentFailed'])->name('competitionPaymentFailed');



Route::get('/payment-success', function () {
    return 'Payment Successful';
})->name('payment.success');


Route::get('/payment-failed', function () {
    return 'Payment Failed';
})->name('payment.failed');








Route::middleware(ValidUser::class)->group(function () {


Route::get('/ganesh-festival/group/upload-photos', [GaneshFestivalGroupController::class, 'groupUploadPhotos'])->name('groupUploadPhotos');
Route::post('/ganesh-festival/upload/cover', [GaneshFestivalGroupController::class, 'uploadGaneshGroupCover'])->name('uploadGaneshGroupCover');

Route::post('/ganesh-festival/upload/group-cover', [GaneshFestivalGroupController::class, 'updateGroupCoverPic'])->name('updateGroupCoverPic');
Route::post('/ganesh-festival/upload/home-cover', [GaneshFestivalGroupController::class, 'updateHomeGaneshCoverPic'])->name('updateHomeGaneshCoverPic');


Route::get('/ganesh-festival/photo', [GaneshFestivalGroupController::class, 'ganeshFestivalGroupphotos'])->name('ganeshFestivalGroupphotos');
Route::get('/ganesh-festival/my-group', [GaneshFestivalGroupController::class, 'ganeshFestivalMyGroup'])->name('ganeshFestivalMyGroup');

Route::get('/ganesh-festival', [GaneshFestivalController::class, 'index']);

Route::get('/ganesh-festival/{slug}/settings', [GaneshFestivalController::class, 'ganeshFestivalSettings'])->name('ganeshFestivalSettings');



Route::get('/ganesh-festival/competition/payment', [GaneshCompetitionPaymentController::class, 'create'])->name('ganeshCompetitionPaymentCreate');
Route::post('/ganesh-festival/competition/home-payment', [GaneshCompetitionPaymentController::class, 'homeCompetitionCallback'])->name('homeCompetitionCallback');
Route::post('/ganesh-festival/competition/group-payment', [GaneshCompetitionPaymentController::class, 'groupCompetitionCallback'])->name('groupCompetitionCallback');


// Route::get('/components', [PageController::class, 'components'])->name('components');


Route::get('/my-business', [MyBusinessController::class, 'index'])->name('myBusiness');
Route::get('/my-business/{cid}', [MyBusinessController::class, 'show'])->name('myBusiness.show');

Route::put('/my-business/{cid}/profile', [MyBusinessController::class, 'updateMyBusinessProfile'])->name('updateMyBusinessProfile');
Route::put('/my-business/{cid}/sociallinks', [MyBusinessController::class, 'updateMyBusinessSocialLinks'])->name('updateMyBusinessSocialLinks');
Route::put('/my-business/{cid}/contact', [MyBusinessController::class, 'updateMyBusinessContact'])->name('updateMyBusinessContact');
Route::delete('/my-business/{id}', [MyBusinessController::class, 'deleteMyBusiness'])->name('deleteMyBusiness');




Route::get('/{slug}', [ListingController::class, 'listing'])->name('listingList');


Route::resource('/live-competition-status', LiveCompetitionStatus::class)->names('LiveCompetitionStatus');


Route::resource('/adm/user', AdminUserController::class)->names('UserController');

});




Route::get('/ganesh-festival/competition/rules', [GaneshFestivalCompetition::class, 'rules'])->name('GaneshFestivalCompetitionRules');

Route::get('/ganesh-festival/competition/live', [GaneshFestivalCompetition::class, 'live'])->name('GaneshFestivalCompetitionLive')->middleware(ValidUser::class);

// Route::get('/ganesh-festival/competition/live/{category_id}', [GaneshFestivalCompetition::class, 'live'])->name('GaneshFestivalCompetitionLive');

Route::post('/ganesh-festival/competition/store-home-ganesh', [GaneshFestivalCompetition::class, 'storeHomeGaneshCompetition'])->name('storeHomeGaneshCompetition');

Route::resource('/ganesh-festival/competition', GaneshFestivalCompetition::class)->names('ganeshFestivalCompetition');
Route::resource('/ganesh-festival/voting', FestivalCompetitionVoting::class)->names('FestivalCompetitionVoting');

Route::get('/ganesh-festival/home/', [GaneshFestivalCompetition::class, 'homeGaneshList'])->name('homeGaneshList');

Route::get('/ganesh-festival/home/{id}', [GaneshFestivalCompetition::class, 'showHome'])->name('showHome');


Route::resource('/ganesh-festival', GaneshFestivalGroupController::class)->names('ganeshFestivalGroup');

Route::get('/ganesh-festival/{slug}/photos', [GaneshFestivalController::class, 'ganeshFestivalPhotos'])->name('ganeshFestivalPhotos');
Route::get('/ganesh-festival/{slug}/videos', [GaneshFestivalController::class, 'ganeshFestivalVideos'])->name('ganeshFestivalVideos');








