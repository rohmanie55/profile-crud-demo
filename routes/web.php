<?php

use App\Http\Controllers\ProfileController;
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
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class,'index'])->name('profile.index');
    Route::get('/profile/{profile}/show', [ProfileController::class,'show'])->name('profile.show');
    Route::match(['GET','POST'],'/profile/create', [ProfileController::class,'create'])->name('profile.create');
    Route::match(['GET','POST'],'/profile/{profile}/edit', [ProfileController::class,'edit'])->name('profile.edit');
    Route::delete('/profile/{profile}', [ProfileController::class,'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
