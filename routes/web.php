<?php

use App\Http\Controllers\AbonnementsController;
use App\Http\Controllers\admin;
use App\Http\Controllers\AffichController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\CoachsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\WelcomePageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClassController::class , 'show'])->name('welcomehome');
Route::get('/affichclub/{id}' ,[AffichController::class ,'show'])->name('affichclub');
Route::get('/affichclass/{id}' ,[AffichController::class ,'showclass'])->name('affichclass');



Route::get('/register', [AuthController::class, 'displayregister'])->name('view.register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'displaylogin'])->name('view.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [admin::class, 'displayHome'])->name('adminpage.adminhome')->middleware('auth');
Route::get('/assistant', [AssistantController::class, 'displayassistant'])->name('assistantpage');


Route::resource('/members', MembersController::class);
Route::resource('/coachs' , CoachsController::class);
Route::resource('/abonnements' ,AbonnementsController::class);
Route::resource('/joins' ,JoinController::class);
Route::resource('/clubs' ,ClubsController::class);
Route::resource('/classes' ,ClassController::class);


Route::post('sendEmailcontact' ,[ContactController::class , 'sendEmail'])->name('sendEmailcontact');





// Route::get('/' ,[WelcomePageController::class , 'index'])->name('welcomehome');
// password reset routes

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');







