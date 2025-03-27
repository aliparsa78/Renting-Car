<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/admin',[AdminController::class,'index']);
    Route::resource('/cars',CarController::class);
    Route::resource('/car_category',CarCategoryController::class);
});


