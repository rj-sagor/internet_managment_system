<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\fontendController;
use App\Http\Controllers\ProblemListController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SetUpController;
use App\Http\Controllers\Backend\Computer_infoController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\scannerController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\setup\designationController;
use App\Http\Controllers\setup\statusController;
use App\Http\Controllers\setup\problemsetController;
use App\Http\Controllers\setup\typeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('admin',AdminController::class);
// fontendController
Route::resource('userlogin', fontendController::class);
// problem List controller
Route::resource('admin_Problem_list', ProblemListController::class);
Route::resource('UserUpoload', UserController::class);
Route::resource('Setup', SetUpController::class);
Route::resource('computerinfo', Computer_infoController::class);
Route::resource('printer', printerController::class);
Route::resource('scanner', scannerController::class);

Route::get('user/status', [Computer_infoController::class, 'Pending_status'])->name('status');
Route::get('user/approve/status', [Computer_infoController::class, 'Approve_status'])->name('Approve_status');
Route::get('user/pend_edit/status/{id}', [Computer_infoController::class, 'pendding_edit'])->name('pendding_edit_status');
Route::get('all/information/pdf', [Computer_infoController::class, 'All_information_pdf'])->name('all_informaton_pdf');
Route::resource('service', ServiceController::class);
Route::resource('setup_designation', designationController::class);
Route::resource('setup_status', statusController::class);
Route::resource('setup_problem', problemsetController::class);
Route::resource('type', typeController::class);

// pdf controller
Route::get('all/scanner_info/pdf/', [scannerController::class, 'scanner_pdf'])->name('scanner.all_information.print_pdf');
Route::get('all/scanner_info_department/pdf/{department_id}', [scannerController::class, 'scanner_department_pdf'])->name('scanner.department.print_pdf');
Route::get('computer_single_data/{id}', [Computer_infoController::class, 'singleData'])->name('single_data_pdf');
Route::get('servicing_details/{id}', [ProblemListController::class, 'service'])->name('service.details');
Route::get('employee', [ProblemListController::class,'other'])->name('employee.index');







