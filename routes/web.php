<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/login',[UserController::class, 'login']);

Route::get('/alumnos',[StudentController::class, 'main']);

Route::get('/alumnos/add',[StudentController::class, 'add']);

Route::get('/pagos',[UserController::class, 'pagos']);

Route::get('/pedidos',[UserController::class, 'pedidos']);

require __DIR__.'/auth.php';
