<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudyListController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home.home',[
            'courses' => Course::all()
        ]);
    });
    Route::get('/editAkun', [UserController::class, 'toEditProfile']);

    Route::patch('/editUser', [UserController::class, 'editUser']);
    Route::delete('/deleteUser', [UserController::class, 'deleteUser']);

    Route::get('/profile', [UserController::class, 'toProfile']);
    Route::get('/profileEdit', [UserController::class, 'toEditProfile']);

    Route::get('/studyList', [StudyListController::class, 'toStudyList']);
    Route::post('/createStudyList', [StudyListController::class, 'createStudyList']);
    Route::delete('/deleteStudyList', [StudyListController::class, 'deleteStudyList']);
    Route::patch('/unCompleteStudyList',[StudyListController::class, 'unCompleteStudyList']);
    Route::patch('/completeStudyList',[StudyListController::class, 'completeStudyList']);

    Route::get('/course/{id}',[CourseController::class, 'toCourse']);
});

Route::get('/login', [UserController::class, 'toLogin'])->name('login');
Route::get('/register', [UserController::class, 'toRegister']);
Route::post('/search', [CourseController::class, 'searchCourse']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

