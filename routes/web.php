<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ClassRoomContoller;
use App\Http\Controllers\Admin\GroupContoller;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\StudentContoller;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TimeTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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
    return view('welcome', [
        'subjects' => \App\Models\Subject::all(),
    ]);
});

Auth::routes();



Route::middleware(['auth', 'set_locale'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('language/{lang}', [LanguageController::class, 'change'])->name('lang');

    Route::resource('branches', BranchController::class);
    Route::resource('class_rooms', ClassRoomContoller::class);
    Route::resource('groups', GroupContoller::class);
    Route::resource('students', StudentContoller::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('lessons', LessonController::class);
    // Route::resource('days_of_weeks', DaysOfWeekController::class);
    Route::resource('time_tables', TimeTableController::class);
});


// Route::get('/greeting/{locale}', function (string $locale) {
//     if (! in_array($locale, ['en', 'ru'])) {
//         abort(400);
//     }
 
//     App::setLocale($locale);
 
//     return redirect()->back();
// })->name('lang');