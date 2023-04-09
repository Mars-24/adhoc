<?php

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

Route::get('/',[App\Http\Controllers\frontend\IndexController::class,'index'])->name('index');
Route::get('about/',[App\Http\Controllers\frontend\IndexController::class,'about'])->name('about');
Route::get('service/',[App\Http\Controllers\frontend\IndexController::class,'service'])->name('service');
Route::get('contact/',[App\Http\Controllers\frontend\IndexController::class,'contact'])->name('contact');
Route::get('portfolio/',[App\Http\Controllers\frontend\IndexController::class,'portfolio'])->name('portfolio');