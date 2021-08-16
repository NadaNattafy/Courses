<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix("admin")->group(function () {

});

Route::get('admin/home', function () {
    return view('admin.layout.index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::group(['middleware' => 'auth:admin'], function () {
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

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')->name('admin.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');
});
