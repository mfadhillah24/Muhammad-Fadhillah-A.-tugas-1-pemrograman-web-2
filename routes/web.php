<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAnggota;

Route::get('/', [DataAnggota::class, 'index'])->name('index');
Route::get('/create', [DataAnggota::class, 'create'])->name('create');
Route::post('/store', [DataAnggota::class, 'store'])->name('store');
Route::get('/edit/{id}', [DataAnggota::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DataAnggota::class, 'update'])->name('update');
Route::get('/delete/{id}', [DataAnggota::class, 'destroy'])->name('delete');
