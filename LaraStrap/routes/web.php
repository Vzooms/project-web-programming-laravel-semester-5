<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home.home',[
        'courses' => Course::all()
    ]);
});

Route::get('/login', [UserController::class, 'toLogin']);
Route::get('/register', [UserController::class, 'toRegister']);
Route::get('/editAkun', [UserController::class, 'toEditProfile']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/editUser', [UserController::class, 'editUser']);
Route::post('/deleteUser', [UserController::class, 'deleteUser']);

Route::get('/profile', [UserController::class, 'toProfile']);
Route::get('/profileEdit', [UserController::class, 'toEditProfile']);

Route::get('/studyList', [StudyListController::class, 'toStudyList']);
Route::post('/createStudyList', [StudyListController::class, 'createStudyList']);
Route::post('/deleteStudyList', [StudyListController::class, 'deleteStudyList']);

Route::post('/createCourse', [StudyListController::class, 'createCourse']);
Route::post('/deleteCourse', [StudyListController::class, 'deleteCourse']);

Route::get('/course/1', function () {
    return view('course');
});
