<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\examController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::group(['middleware' => 'auth'], function () {
    
Route::resource('/Dashboard',DashboardController::class);

Route::resource('/Student',StudentController::class);

Route::resource('/Employee',EmployeeController::class);

Route::resource('/Subject',SubjectController::class);

Route::resource('/Classes',ClassesController::class);

Route::get('/exam/showedit', [examController::class,'showedit']);

Route::resource('/exam',examController::class);

Route::resource('/Profiles',ProfilesController::class);

// Route::post('/marks', [MarksController::class, 'store'])->name('marks.store');

Route::resource('/Marks',MarksController::class);

Route::resource('/Settings',SettingsController::class);

Route::resource('/User',UserController::class);

});



Route::get('/', function () {
    return view('auth.login');
});




Auth::routes();


// Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
