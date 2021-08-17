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

    Route::resources([
        'home' => HomeController::class,
        'courses' => CoursesController::class,
        'allcourses' => AllCoursesController::class,
        'addcourses' => AddCoursesController::class,
        'introcourses' => IntroCoursesController::class,
        'individualcourses' => IndividualCoursesController::class,
        'addlectures' => AddLectureController::class,
        'lessons' => LessonController::class,
        'comments' => CommentController::class,
        'alerts' => AlertController::class,
        'remarks' => RemarkController::class,
        'messages' => MessageController::class,
        'favourites' => FavouriteController::class,
        'interests' => InterestController::class,
        'trainerinterests' => TrainerInterestController::class,
        'cvs' => CvController::class,
        'tests' => TestController::class,
        'addtests' => AddTestController::class,
        'about' => AboutController::class,
        'certif' => CertifController::class,
        'category' => CategoryController::class,
        'contact' => ContactController::class,
        'editor' => EditorController::class,
        'profile' => ProfileController::class,
        'signup' => SignUpController::class,
        'review' => ReviewController::class,
        'reset' => ResetController::class,

    ]);

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
