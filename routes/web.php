<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BaneUserController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Quize\ValidateQuizeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Company\CompanyQuizzesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\User\QuizeTakeController;
use App\Http\Controllers\User\QuizzeController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserSettingsController;
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
Route::get('/userdashboard',function(){
    return view('users.UserDashboard');
});
Route::get('/userprofile',function(){
    return view('users.UserProfile');
});





// home route
Route::get('/home',[HomeController::class, 'index'])->name('home')->middleware('auth');
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
// hande Company Registration
Route::post('/CompanyStore', [AuthController::class, 'CompanyStore'])->name('CompanyStore');
// handle user password reset
Route::get('/forgot-password', [ForgetPasswordController::class, 'index'])->name('password.forget');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgetPasswordController::class, 'reset'])->name('password.update');
// admin dashboard
Route::resource('admin', AdminController::class)->middleware('role:admin');
Route::put('banned/{user}', [BaneUserController::class, 'banUser'])->name('banuser')->middleware('role:admin');
Route::resource('category', CategoryController::class)->middleware('role:admin');
Route::get('quizevalidate', [ValidateQuizeController::class, 'index'])->name('quizevalidate')->middleware('role:admin');
Route::put('/publishQuize/{id}', [ValidateQuizeController::class, 'publishQuize'])->name('publishQuize')->middleware('role:admin');
Route::put('/unpublishQuize/{id}', [ValidateQuizeController::class, 'unpublishQuize'])->name('unpublishQuize')->middleware('role:admin');
// user dashboard
Route::resource('userdashboard', UserDashboardController::class)->middleware('role:teacher,representative');
Route::resource('userprofile', UserProfileController::class);
Route::resource('usersettings', UserSettingsController::class);
Route::resource('userquizzes',QuizzeController::class)->middleware('role:teacher,representative');
Route::get('/showParticipants\{id}', [UserDashboardController::class, 'showUserParticipant'])->name('showUserParticipants');
Route::get('/showMyQuizzesParticipant', [UserDashboardController::class, 'showMyQuizzesParticipant'])->name('showMyQuizzesParticipant');
// teacher controller
Route::post('/addClass',[TeacherController::class, 'addClass'])->name('addClass')->middleware('role:teacher');
Route::get('/teacherClass', [TeacherController::class, 'index'])->name('teacherClass')->middleware('role:teacher');
Route::get('/classDetials\{id}', [TeacherController::class, 'showDetails'])->name('classDetials')->middleware('role:teacher');
Route::put('/updateClass/{id}', [TeacherController::class, 'updateClass'])->name('updateClass')->middleware('role:teacher');
Route::delete('/deleteClass\{id}', [TeacherController::class, 'deleteClass'])->name('deleteClass')->middleware('role:teacher');
Route::delete('/deleteStudent\{id}', [TeacherController::class, 'deleteStudent'])->name('deleteStudent')->middleware('role:teacher');
Route::get('/showTeacherParticipants\{id}', [TeacherController::class, 'showparticipants'])->name('showTeacherParticipants')->middleware('role:teacher');
// student controller
Route::get('/studentClass', [StudentController::class, 'index'])->name('studentClass')->middleware('role:student');
Route::post('/joinClass', [StudentController::class, 'joinClass'])->name('joinClass')->middleware('role:student');
Route::get('/MyclassDetails\{id}', [StudentController::class, 'showDetails'])->name('MyclassDetails')->middleware('role:student');
Route::get('/MyClassQuizzes', [StudentController::class, 'showMyClassQuizzes'])->name('MyClassQuizzes')->middleware('role:student');
// Quize controller
Route::get('/QuizTake/{id}', [QuizeTakeController::class, 'take'])->name('QuizTake');
Route::post('/QuizSubmit/{id}', [QuizeTakeController::class, 'QuizSubmit'])->name('QuizSubmit');
Route::get('/MyQuizzes', [QuizeTakeController::class, 'showMyQuizzes'])->name('MyQuizzes');
Route::get('/MyResults/{id}', [QuizeTakeController::class, 'showMyResults'])->name('showMyResults');
Route::delete('/DeleteQuize/{id}', [QuizeTakeController::class, 'deleteQuiz'])->name('DeleteQuize');
// Company Quizzes
Route::get('/companyQuizzes', [CompanyQuizzesController::class, 'index'])->name('companyQuizzes');
Route::get('/showRepresentativeParticipants\{id}', [CompanyQuizzesController::class, 'showparticipants'])->name('showRepresentativeParticipants');
// Show participants results
Route::get('/showParticipantResults/{user_id}/{quiz_id}', [QuizeTakeController::class, 'showParticipantResults'])->name('showParticipantResults');

//search
Route::get('/Searchquize/{search}/{filter}', [HomeController::class, 'search'])->name('search');
Route::get('/getChartStatics', [UserDashboardController::class, 'getChartStatics'])->name('getChartStatics');
