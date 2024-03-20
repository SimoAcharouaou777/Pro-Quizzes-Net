<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgetPasswordController;
use Illuminate\Support\Facades\Route;

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

// home route
Route::get('/home',[HomeController::class, 'index'])->name('home');
// handle view for user registration
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/CompanyRegister', [AuthController::class, 'CompanyRegister'])->name('CompanyRegister');
// handle user authentication
Route::post('store', [AuthController::class, 'store'])->name('store');
Route::get('UserRole', [AuthController::class, 'UserRole'])->name('UserRole');
Route::get('/assign-role/{role}', [AuthController::class, 'assignRole'])->name('assignRole');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
// handle user password reset
Route::get('/forgot-password', [ForgetPasswordController::class, 'index'])->name('password.forget');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgetPasswordController::class, 'reset'])->name('password.update');
// admin dashboard
Route::resource('admin', AdminController::class);