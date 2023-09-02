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
Route::get('blog-list/',[App\Http\Controllers\frontend\IndexController::class,'blog_list'])->name('blog-list');

Route::post('message/',[App\Http\Controllers\frontend\IndexController::class,'message'])->name('message');

//Back-end Route

Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[App\Http\Controllers\Admin\AuthController::class,'showLoginForm'])->name('admin.loginForm');
    Route::post('register/',[App\Http\Controllers\Admin\AuthController::class,'login'])->name('admin.login');

});

Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){

    Route::get('/',[App\Http\Controllers\Admin\AuthController::class,'index'])->name('admin');
    Route::resource('/message',App\Http\Controllers\Admin\IndexController::class);
    Route::resource('/portfolio',App\Http\Controllers\Admin\PortfolioController::class);

    Route::get('credential/{id}/',[App\Http\Controllers\Admin\IndexController::class,'credentialPage'])->name('credentialPage');
    Route::patch('updatePassword/{id}/',[App\Http\Controllers\Admin\IndexController::class,'changePassword'])->name('updatepass');

});
Auth::routes(['login' => false, 'register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
