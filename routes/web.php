<?php

use App\Http\Controllers\Website\AuthController;
// use App\Http\Controllers\Trainer\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Website\NotificationController;
use App\Http\Controllers\WelcomeController;
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

Route::group(['prefix' => '/', 'as' => 'website.', 'namespace' => 'App\Http\Controllers\Website'], function () {

    Route::resource('home', HomeController::class);

    Route::resource('courses', CoursesController::class);

    Route::resource('allcourses', AllCourseController::class);

    Route::resource('addcourses', AddCourseController::class);

    Route::resource('introcourses', IntroCourseController::class);

    Route::resource('addlectures', AddLectureController::class);

    Route::resource('lessons', LessonController::class);

    Route::resource('comments', CommentController::class);

    Route::resource('alerts', AlertController::class);

    Route::resource('remarks', RemarkController::class);

    Route::resource('messages', MessageController::class);

    Route::resource('favourites', FavouriteController::class);

    Route::resource('interests', InterestController::class);

    Route::resource('trainerinterests', TrainerInterestController::class);

    Route::resource('cvs', CvController::class);

    Route::resource('tests', TestController::class);

    Route::resource('addtests', AddTestController::class);

    Route::resource('about', AboutController::class);

    Route::resource('certif', CertifController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('contact', ContactController::class)->only(['index', 'store', 'create']);

    Route::resource('editor', EditorController::class);

    Route::resource('profile', ProfileController::class);

    Route::resource('reset', ResetController::class);

    Route::resource('signup', SignUpController::class);

    Route::resource('review', ReviewController::class);

    Route::post('user-login', [AuthController::class, 'userLogin'])->name('login.user');

    //Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('send', [NotificationController::class, 'sendNotification'])->name('send');

    Route::post('/rate/{course}', 'ReviewController@courseStar')->name('courseStar');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login')
            ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');


});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('send-mail', [WelcomeController::class, 'mailSend']);
