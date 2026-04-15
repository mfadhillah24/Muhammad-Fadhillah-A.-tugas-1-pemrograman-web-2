<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', [AnggotaController::class, 'index'])->name('index');
Route::get('/create', [AnggotaController::class, 'create'])->name('create');
Route::post('/store', [AnggotaController::class, 'store'])->name('store');
Route::get('/edit/{id}', [AnggotaController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AnggotaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [AnggotaController::class, 'destroy'])->name('delete');
