<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
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

Route::get('/studyList', function () {
    return view('studylist');
});

Route::get('/studylistempty', function () {
    return view('studylistempty');
});
