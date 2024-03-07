<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Landing\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\MyCourseController;
use App\Http\Controllers\Admin\ShowcaseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InfrastructureController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Landing\CheckoutController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\NotificationDatabaseController;
use App\Http\Controllers\Member\SeriesController as MemberSeriesController;
use App\Http\Controllers\Member\CourseController as MemberCourseController;
use App\Http\Controllers\Member\ReviewController as MemberReviewController;
use App\Http\Controllers\Landing\CourseController as LandingCourseController;
use App\Http\Controllers\Landing\ReviewController as LandingReviewController;
use App\Http\Controllers\Member\ProfileController as MemberProfileController;
use App\Http\Controllers\Member\MyCourseController as MemberMyCourseController;
use App\Http\Controllers\Member\ShowcaseController as MemberShowcaseController;
use App\Http\Controllers\Landing\CategoryController as LandingCategoryController;
use App\Http\Controllers\Landing\ShowcaseController as LandingShowcaseController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UploadController;
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
Route::post('upload', [UploadController::class, 'upload'])->name('upload');

Route::get('testing', '\App\Http\Controllers\TestingController@index');
// home route
Route::get('/', HomeController::class)->name('home');
// course route
Route::controller(LandingCourseController::class)->as('course.')->group(function(){
    Route::get('/courses', 'index')->name('index');
    Route::get('/courses/{course:slug}', 'show')->name('show');
    Route::get('/courses/{course:slug}/{series:number_of_series}', 'series')->name('series');
});
// category route
Route::get('/categories/{category:slug}', LandingCategoryController::class)->name('category');
// review route
Route::get('/reviews', LandingReviewController::class)->name('review');
// showcase route
Route::get('/showcases', LandingShowcaseController::class)->name('showcase');
// cart route
Route::controller(CartController::class)->middleware('auth')->as('cart.')->group(function(){
    Route::get('/cart', 'index')->name('index');
    Route::post('/cart/{course}', 'store')->name('store');
    Route::delete('/cart/{cart}', 'delete')->name('destroy');
});
// checkout route
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/transactions/{id}/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

Route::get('/certificate-custom',  [CertificateController::class, 'custom'])->name('certificate.certificate');
Route::post('/store-html-certificate/{id}',  [CertificateController::class, 'storehtmlcertificate'])->name('store-html-certificate');


// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::controller(NotificationDatabaseController::class)->group(function(){
        Route::post('/mark-as-read/{id}', 'readNotification')->name('markNotification');
        Route::post('/mark-all-read', 'readAllNotification')->name('markAllRead');
    });

    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::get('categories/ajax/datatable', [CategoryController::class, 'datatable'])->name('categories.ajax.datatable');

    Route::resource('benefits', BenefitController::class)->except(['show']);
    Route::get('benefits/ajax/datatable', [BenefitController::class, 'datatable'])->name('benefits.ajax.datatable');

    Route::resource('courses', CourseController::class)->except(['show']);
    Route::get('courses/ajax/datatable', [CourseController::class, 'datatable'])->name('courses.ajax.datatable');

    Route::resource('courses.series', SeriesController::class);
    Route::get('courses/{course_id}/series/ajax/datatable', [SeriesController::class, 'datatable'])->name('courses.series.ajax.datatable');

    Route::resource('courses.photos', PhotoController::class);
    Route::get('courses/{course_id}/photos/ajax/datatable', [PhotoController::class, 'datatable'])->name('courses.photos.ajax.datatable');

    Route::get('my-course', MyCourseController::class)->name('mycourse');

    Route::resource('transactions', TransactionController::class);
    Route::get('transactions/ajax/datatable', [TransactionController::class, 'datatable'])->name('transactions.ajax.datatable');

    Route::resource('users', UserController::class)->except(['show']);
    Route::get('users/ajax/datatable', [UserController::class, 'datatable'])->name('users.ajax.datatable');

    Route::get('/showcase', ShowcaseController::class)->name('showcase.index');

    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('reviews/ajax/datatable', [ReviewController::class, 'datatable'])->name('reviews.ajax.datatable');

    Route::controller(ReviewController::class)->group(function(){
        Route::post('/review/{course}', 'store')->name('review');
    });

    Route::controller(UserController::class)->as('user.')->group(function() {
        Route::get('/user/profile', 'profile')->name('profile');
        Route::put('/user/profile/{user}', 'profileUpdate')->name('profile.update');
        Route::get('/user/profile/password/{user}', 'profile')->name('profile.password');
    });

    Route::get('/certificate',  [CertificateController::class, 'index'])->name('certificate.index');

    Route::resource('mentor', MentorController::class)->except(['show']);
    Route::get('mentor/ajax/datatable', [MentorController::class, 'datatable'])->name('mentor.ajax.datatable');

    Route::resource('infrastructure', InfrastructureController::class)->except(['show']);
    Route::get('infrastructure/ajax/datatable', [InfrastructureController::class, 'datatable'])->name('infrastructure.ajax.datatable');

});

// member route
Route::group(['as' => 'member.', 'prefix' => 'account', 'middleware' => ['auth', 'role:member']], function(){

    Route::get('dashboard', MemberDashboardController::class)->name('dashboard');

    Route::get('/my-course', MemberMyCourseController::class)->name('mycourse');

    Route::resource('/showcases', MemberShowcaseController::class);
    Route::get('showcases/ajax/datatable', [MemberShowcaseController::class, 'datatable'])->name('showcases.ajax.datatable');

    Route::resource('/transactions', MemberTransactionController::class)->only('index', 'show');
    Route::get('transactions/ajax/datatable', [MemberTransactionController::class, 'datatable'])->name('transactions.ajax.datatable');

    Route::post('/review/{course}', [MemberReviewController::class, 'store'])->name('review');

    Route::get('my-course/course/{id}', [MemberCourseController::class, 'course'])->name('mycourse.course');
    Route::get('my-course/course/{id}/series/{seriesId}', [MemberCourseController::class, 'show'])->name('mycourse.course.show');

    Route::controller(MemberProfileController::class)->as('profile.')->group(function(){
        Route::get('/profile', 'index')->name('index');
        Route::put('/profile/{user}', 'updateProfile')->name('update');
        Route::put('/profile/password/{user}', 'updatePassword')->name('password');
    });

});

// login with google
Route::get('/auth/redirect', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
