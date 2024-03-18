<?php

use App\Http\Controllers\AuthController;
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

Route::get('login', function () {
    return view('auth.UserLogin');
});
// handle view for user registration
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('CompanyRegister', [AuthController::class, 'CompanyRegister'])->name('CompanyRegister');
// handle user authentication
Route::post('store', [AuthController::class, 'store'])->name('store');
Route::get('UserRole', [AuthController::class, 'UserRole'])->name('UserRole');