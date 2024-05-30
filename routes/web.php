<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeseaseController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\IndicationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('User.user-dashboard');
})->middleware('guest')->name('home');

// Route::get('/dashboard', function () {
//     return view('Dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/get-data', [RuleController::class, 'getData'])->name('get-data');

Route::middleware(['role:admin'])->group(function () {
    Route::post('diagnosis-deleteAll', [DiagnosisController::class, 'deleteAll'])->name('diagnosis-deleteAll');
    // Route::resource('dashboard', DashboardController::class);
    Route::get('/riwayat-diagnosis', [DiagnosisController::class, 'history'])->name('riwayat-diagnosis');

    Route::resource('dashboard/gejala', IndicationController::class);
    Route::resource('dashboard/penyakit', DeseaseController::class);
    Route::resource('dashboard/pengetahuan', RuleController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('dashboard/data-admin', AdminController::class);
});

Route::resource('diagnosis', DiagnosisController::class);
Route::middleware(['role:user'])->group(function () {
});




require __DIR__ . '/auth.php';
