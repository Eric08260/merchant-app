<?php

use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('merchants', [MerchantController::class, 'index'])->name('merchants.index');
Route::post('store', [MerchantController::class, 'store'])->name('merchants.store');
Route::get('merchants/{id}', [MerchantController::class, 'edit'])->name('merchants.edit');
Route::put('merchants/{id}', [MerchantController::class, 'update'])->name('merchants.update');
Route::delete('merchants/{id}', [MerchantController::class, 'destroy'])->name('merchants.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
