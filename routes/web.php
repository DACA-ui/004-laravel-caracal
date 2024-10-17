<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AsignacionDocenteTempController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.basic');
});

Route::get('/loadDeclaration/index', [AsignacionDocenteTempController::class, 'index'])->name('loadDeclaration.index');
Route::get('/loadDeclaration/{id}', [AsignacionDocenteTempController::class, 'show'])->name('loadDeclaration.show');
Route::get('/generar-pdf/{id}', [PDFController::class, 'generarPDF'])->name('generarPDF');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
