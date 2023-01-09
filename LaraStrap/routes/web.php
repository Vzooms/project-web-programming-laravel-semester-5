<?php

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
    return view('home.home');
});

Route::get('/login', [UserController::class, 'toLogin']);
Route::get('/register', [UserController::class, 'toRegister']);
Route::get('/editAkun', [UserController::class, 'toEditProfile']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/editUser', [UserController::class, 'editUser']);
Route::post('/deleteUser', [UserController::class, 'deleteUser']);


Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/profileEdit', function () {
    return view('profile.profile-edit');
});

Route::get('/studyList', [StudyListController::class, 'toStudyList']);
Route::post('/createStudyList', [StudyListController::class, 'createStudyList']);
Route::post('/deleteStudyList', [StudyListController::class, 'deleteStudyList']);

Route::post('/createCourse', [StudyListController::class, 'createCourse']);
Route::post('/deleteCourse', [StudyListController::class, 'deleteCourse']);

Route::get('/studylistempty', function () {
    return view('studylistempty');
});

Route::get('/profilecourse', function () {
    return view('profile.profile-course');
});

Route::get('/profileempty', function () {
    return view('profile.profile-course-empty');
});

Route::get('/course', function () {
    return view('course');
});
