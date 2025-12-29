<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// admin dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

// gest dashboard
Route::get('/editor/dashboard', function () {
    return view('editor.dashboard');
})->middleware(['auth', 'verified', 'editor'])->name('editor.dashboard');

// moderator dashboard
Route::get('/moderator/dashboard', function () {
    return view('moderator.dashboard');
})->middleware(['auth', 'verified', 'moderator'])->name('moderator.dashboard');

// customer dashboard
Route::get('/customer/dashboard', function () {
    return view('customer.dashboard');
})->middleware(['auth', 'verified', 'customer'])->name('customer.dashboard');

// guest dashboard
Route::get('/guest/dashboard', function () {
    return view('guest.dashboard');
})->middleware(['auth', 'verified', 'guest'])->name('guest.dashboard');

// rider dashboard
Route::get('/rider/dashboard', function () {
    return view('rider.dashboard');
})->middleware(['auth', 'verified', 'rider'])->name('rider.dashboard');

// diller dashboard
Route::get('/diller/dashboard', function () {
    return view('diller.dashboard');
})->middleware(['auth', 'verified', 'diller'])->name('diller.dashboard');

// dealer dashboard
Route::get('/dealer/dashboard', function () {
    return view('dealer.dashboard');
})->middleware(['auth', 'verified', 'dealer'])->name('dealer.dashboard');

// seller dashboard
Route::get('/seller/dashboard', function () {
    return view('seller.dashboard');
})->middleware(['auth', 'verified', 'seller'])->name('seller.dashboard');

// subdealer dashboard
Route::get('/subdealer/dashboard', function () {
    return view('subdealer.dashboard');
})->middleware(['auth', 'verified', 'subdealer'])->name('subdealer.dashboard');

// user dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
