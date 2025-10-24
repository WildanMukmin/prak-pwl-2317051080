<?php

use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
// Grup route untuk User
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
});

// Grup route untuk MataKuliah
Route::prefix('matakuliah')->name('matakuliah.')->group(function () {
    Route::get('/', [MataKuliahController::class, 'index'])->name('index');
    Route::get('/create', [MataKuliahController::class, 'create'])->name('create');
    Route::post('/', [MataKuliahController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MataKuliahController::class, 'edit'])->name('edit');
    Route::put('/{id}', [MataKuliahController::class, 'update'])->name('update');
    Route::delete('/{id}', [MataKuliahController::class, 'destroy'])->name('destroy');
});
require __DIR__.'/auth.php';
