<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadItemsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//login
Route::post('/login-form', [LoginController::class, 'loginValidation'])->name('login.form'); //هون وديناه على كنترولر عشان نسوي فالديشن
Route::get('/', [LoginController::class, 'index'])->name('login');

//register
Route::post('/register', [RegisterController::class, 'register'])->name('register-form');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');


//pages returns
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/upload-items', [UploadItemsController::class, 'index'])->name('upload-items');
    Route::post('', [UploadItemsController::class, 'addNewStock'])->name('add-new-stock');
});
