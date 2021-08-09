<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;


// Admin Routes
Route::prefix("admin")->group(function(){

});

Route::get('admin/home', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'App\Http\Controllers\Admin','middleware'=>'auth:admin'], function () {

    Route::resource('admins', AdminController::class);

    Route::resource('courses', CourseController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('users', UserController::class);

    Route::resource('lessons', LessonController::class);

    Route::resource('trainers', TrainerController::class);

    Route::resource('usercourses', UserCourseController::class);

    Route::resource('useropinions', UserOpinionController::class);

    Route::resource('settings', SettingController::class);
});

Route::get('/login-admin', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('login');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');

//Route::resources

// Route::resources([
//     'admins '=> AdminController::class,

//     'courses'  => CourseController::class,

//     'users' => UserController::class,

//     'lessons' => LessonController::class,

//     'trainers' => TrainerController::class,

//     'settings' => SettingController::class,

//     'usercourses' => UserCourseController::class,
// ]);
// });

