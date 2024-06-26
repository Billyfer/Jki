<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Auth\KaryawanLoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/landingpage', function () {
    return view('layouts.app');
})->middleware(['auth', 'verified'])->name('landingpage');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('branches', BranchController::class);
Route::resource('karyawans', KaryawanController::class);

Route::prefix('karyawan')->group(function () {
    Route::get('login', [KaryawanLoginController::class, 'showLoginForm'])->name('karyawan.login');
    Route::post('login', [KaryawanLoginController::class, 'login'])->name('karyawan.login.submit');
    Route::post('logout', [KaryawanLoginController::class, 'logout'])->name('karyawan.logout');
    Route::get('/', function () {
        return view('karyawan.dashboard');
    })->middleware('auth.karyawan')->name('karyawan.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
