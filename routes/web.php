<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\Admin\SupportTicketController;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Public iOS Privacy Policy page
Route::get('/ios/privacy', function () {
    return view('ios.privacy');
})->name('ios.privacy');

// Public iOS Support page
Route::get('/ios/support', function () {
    return view('ios.support');
})->name('ios.support');

// Public iOS Terms of Use page
Route::get('/ios/terms', function () {
    return view('ios.terms');
})->name('ios.terms');

require __DIR__.'/settings.php';

// Admin dashboard: Support tickets (auth only)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/support', [SupportTicketController::class, 'index'])->name('admin.support.index');
    Route::patch('/admin/support/{ticket}', [SupportTicketController::class, 'update'])->name('admin.support.update');
});
