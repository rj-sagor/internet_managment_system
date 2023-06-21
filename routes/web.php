<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\fontendController;
use App\Http\Controllers\ProblemListController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SetUpController;

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

Route::get('userlogin', function () {
    return view('fontend.problem_list');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('admin',AdminController::class);
// fontendController
Route::resource('userlogin', fontendController::class);
// problem List controller
Route::resource('admin_Problem_list', ProblemListController::class);
Route::resource('UserUpoload', UserController::class);
Route::resource('Setup', SetUpController::class);




