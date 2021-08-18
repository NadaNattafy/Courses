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

        Route::resources([
            'admins' => AdminController::class,

            'courses' => CourseController::class,

            'categories' => CategoryController::class,

            'users' => UserController::class,
            
            'lessons' => LessonController::class,
            
            'trainers' => TrainerController::class,
            
            'usercourses' => UserCourseController::class,
            
            'useropinions' => UserOpinionController::class,
            
            'settings' => SettingController::class,
        ]);
    });

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')->name('admin.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');
});
