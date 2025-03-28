<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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



Route::get('/',[FrontController::class,'index']);
Auth::routes();

Route::middleware(['auth.check'])->group(function(){
    // User part
    Route::get('/register2',[UserController::class,'register2'])->name('register2');
    Route::post('/register_stp2',[UserController::class,'register_stp2'])->name('register_stp2');
    Route::get('/user_profile',[UserController::class,'profile']);
    Route::view('/update_user','Frontend.users.update');
    Route::post('/update_user/{id}',[UserController::class,'update_user'])->name('update_user');


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/admin',[AdminController::class,'index']);
    Route::resource('/cars',CarController::class);
    Route::resource('/car_category',CarCategoryController::class);
    Route::resource('/service',ServiceController::class);
});


