<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Front\AuthController as UserAuth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return redirect()->route('admin.login'); // Force redirect to login for debugging
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuth::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'login'])->name('adminlogin');
    Route::post('logout', [AdminAuth::class, 'logout'])->name('admin.logout');
    Route::middleware('auth:admin')->get('dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
});

Route::prefix('user')->group(function () {
    Route::get('login', [UserAuth::class, 'showLoginForm'])->name('front.login');
    Route::post('login', [UserAuth::class, 'login']);
    Route::post('logout', [UserAuth::class, 'logout'])->name('front.logout');
    Route::middleware('auth:web')->get('home', function() {
        return view('front.home');
    })->name('home');
});