<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('website/home', function () {
    return view('website.index');
});

Route::group(['prefix'=>'website','as'=>'website.','namespace'=>'App\Http\Controllers\Website'], function () {

    Route::resource('about', Website\AboutController::class);

    Route::resource('category', Website\CategoryController::class);

    Route::resource('contact', Website\ContactController::class);

    Route::resource('course', Website\CourseController::class);

    Route::resource('index', Website\IndexController::class);

    Route::resource('profile', Website\ProfileController::class);

    Route::resource('test', Website\TestController::class);

    Route::resource('signup', Website\SignUpController::class);

    Route::resource('trainer', Website\TrainerController::class);
});

