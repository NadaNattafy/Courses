<?php

use Illuminate\Support\Facades\Route;


// Admin Routes
Route::prefix("admin")->group(function(){

});

Route::get('admin/home', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'App\Http\Controllers\Admin'], function () {

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

