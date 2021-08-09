<?php

use App\Http\Controllers\Website\AuthController;
//use App\Http\Controllers\Trainer\Auth\AuthenticatedSessionController;
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

    Route::resource('lessons', LessonController::class);

    Route::resource('comments', CommentController::class);

    Route::resource('alerts', AlertController::class);

    Route::resource('remarks', RemarkController::class);

    Route::resource('messages', MessageController::class);

    Route::resource('favourites', FavouriteController::class);

    Route::resource('interests', InterestController::class);

    Route::resource('cvs', CvController::class);

    Route::resource('tests', TestController::class);

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

    Route::post('trainer.login', [AuthController::class, 'trainerLogin'])->name('login.trainer');

    Route::get('/trainer.login', [AuthController::class, 'trainerLogin@save'])->name('save.trainer.login');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('logout-trainer', [AuthController::class, 'logouttrainer'])->name('logout.trainer');

    Route::get('send', [NotificationController::class, 'sendNotification'])->name('send');

   // Route::post('trainer.login', [AuthController::class, 'trainerLogin'])->name('login.trainer');

    // Route::get('/trainer.login', [AuthController::class, 'trainerLogin@save'])->name('save.trainer.login');

    // Route::post('logout-trainer', [AuthController::class, 'logouttrainer'])->name('logout.trainer');

    Route::post('/rate/{course}', 'ReviewController@courseStar')->name('courseStar');

    Route::get('/forget-password', [ForgotPassController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPassController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPassController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPassController::class, 'submitResetPasswordForm'])->name('reset.password.post');

});

Route::group(['prefix' => '/', 'as' => 'trainer.', 'namespace' => 'App\Http\Controllers\Trainer'], function () {

    Route::resource('trainer', TrainerController::class);

    Route::resource('trainerlogin', TrainerLoginController::class);

    Route::get('/login-trainer', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login.trainer');

        Route::post('/login-trainer', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

    Route::post('/logout-trainer-trainer', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout.trainer');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('send-mail', [WelcomeController::class, 'mailSend']);
