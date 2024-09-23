<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ClassRoomContoller;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GroupContoller;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\SearchController;
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
    // Главная страница
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('language/{lang}', [LanguageController::class, 'change'])->name('lang');

    // Расписание
    Route::resource('time_tables', TimeTableController::class); // расписание
    Route::resource('lessons', LessonController::class); // уроки

    // Структура
    Route::resource('branches', BranchController::class); // филиалы
    Route::resource('class_rooms', ClassRoomContoller::class); // аудитории

    // Учебный план
    Route::resource('subjects', SubjectController::class); // предметы
    Route::resource('groups', GroupContoller::class); // группы
    Route::resource('courses', CourseController::class); // курсы

    // Пользователи
    Route::resource('students', StudentContoller::class);  // студенты
    Route::resource('teachers', TeacherController::class); // преподаватели

    // Поиск
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/search', [SearchController::class, 'search'])->name('search_process');
    Route::get('/search/groups', [SearchController::class, 'get_groups'])->name('get_groups');
});
