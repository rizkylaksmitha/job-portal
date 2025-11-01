<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hello', function () {
    return "Halo, ini halaman percobaan route!";
});

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/admin', function () {
    return "Halaman Admin";
})->middleware(['auth', 'isAdmin']);

Route::get('/admin', function () {
    return "Halo Admin!";
})->middleware(['auth', 'isAdmin']);

Route::get('/admin/jobs', function () {
    return view('admin.jobs');
})->middleware(['auth', 'isAdmin']);

require __DIR__.'/auth.php';
