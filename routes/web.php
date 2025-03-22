<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\PackageController;


use App\Http\Controllers\Front\AuthController as UserAuth;
use App\Http\Controllers\Front\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return redirect()->route('admin.login'); // Redirect to login
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuth::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'login'])->name('adminlogin');
    Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
        Route::resource('packages', PackageController::class);
    });
});

// User Routes
// Home Page Route (Always Accessible)
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Authentication Routes
Route::prefix('user')->group(function () {
    Route::get('login', [UserAuth::class, 'showLoginForm'])
        ->name('front.login')
        ->middleware('guest'); // Agar login hai to login page access na ho

    Route::post('login', [UserAuth::class, 'login'])->name('front.login.submit');
    Route::post('logout', [UserAuth::class, 'logout'])->name('front.logout');
});