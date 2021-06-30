<?php

use App\Http\Controllers\Website\AuthController;
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

Route::group(['prefix' => 'website', 'as' => 'website.', 'namespace' => 'App\Http\Controllers\Website'], function () {

    Route::resource('home', HomeController::class);

    Route::resource('courses', CoursesController::class);

    Route::resource('remarks', RemarkController::class);

    Route::resource('tests', TestController::class);

    Route::resource('about', AboutController::class);

    Route::resource('certif', CertifController::class);

    Route::resource('contact', ContactController::class)->only(['index', 'store', 'create']);

    Route::resource('editor', EditorController::class);

    Route::resource('profile', ProfileController::class);

    Route::resource('reset', ResetController::class);

    Route::resource('trainer', TrainerController::class);

   Route::post('user-login', [AuthController::class, 'userLogin'])->name('login.user');

   Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

  // Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


});
