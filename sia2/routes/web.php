<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/login',[LoginController::class,"login"])->name("login");
Route::get('/home',[HomeController::class,'home'])->name("home");

Route::get('/v1/moderate',[EmployeeController::class,'getEmploymentsData']);
Route::get('/v1/challenging', [EmployeeController::class,'getEmploymentsChallenging']);
Route::get('/v1/difficult', [EmployeeController::class,'getEmploymentsDifficult']);
Route::get('/dashboard/employee', [EmployeeController::class, 'showEmployeePage'])->name('dashboard.employee');
