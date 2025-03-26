<?php

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ContactPage;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\PackageController;


use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AuthController as UserAuth;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PackagesController;

Route::get('/admin', function () {
    return redirect()->route('admin.login'); // Redirect to login
});

// Admin Routes
Route::middleware(['admin.guest'])->group(function () {
    Route::get('admin/login', [AdminAuth::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin/login', [AdminAuth::class, 'login'])->name('adminlogin');
});

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::resource('packages', PackageController::class);
    Route::delete('/delete-image/{id}', [PackageController::class, 'deleteImage']); // Fixed {id}
    Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');
    
    Route::delete('/delete-lead/{id}', [AdminContactController::class, 'deleteLeads'])->name('admin.contact.destroy'); // Fixed {id}
    Route::get('leads', [AdminContactController::class, 'index'])->name('admin.contact.index');

    Route::get('contact-page/edit', [ContactPage::class, 'edit'])->name('admin.contactpage.edit');
    Route::post('contact-page/update', [ContactPage::class, 'update'])->name('admin.contactpage.update');

    Route::get('about-us/edit', [AboutUsController::class, 'edit'])->name('admin.about.edit');
    Route::post('about-us/update', [AboutUsController::class, 'update'])->name('admin.about.update');

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
    
    Route::get('packages', [PackagesController::class, 'index'])->name('front.packages');
    Route::get('package-detail/{id}', [PackagesController::class, 'detail'])->name('front.packages.detail');
    
    Route::get('about-us', [AboutController::class, 'index'])->name('front.about');

    Route::get('contact-us', [ContactController::class, 'index'])->name('front.contact');
    Route::post('contact-form', [ContactController::class, 'contact_us'])->name('front.contact.submit');
});