<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ClassRoomContoller;
use App\Http\Controllers\Admin\GroupContoller;
use App\Http\Controllers\Admin\StudentContoller;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('branches', BranchController::class);
    Route::resource('class_rooms', ClassRoomContoller::class);
    Route::resource('groups', GroupContoller::class);
    Route::resource('students', StudentContoller::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('teachers', TeacherController::class);
});


Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ru'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    return redirect()->back();
})->name('lang');