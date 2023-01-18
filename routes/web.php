<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MembersController;
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

Route::view('/', "welcome")->name('welcomehome');

Route::get('/register', [AuthController::class, 'displayregister'])->name('view.register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'displaylogin'])->name('view.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [admin::class, 'displayHome'])->name('adminpage.adminhome');

Route::resource('/members', MembersController::class);




