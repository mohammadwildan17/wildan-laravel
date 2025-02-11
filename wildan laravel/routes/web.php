<?php

use App\http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

Route::get('/admin/inputkategori', [CategoryController::class, 'index'])->name('admin.inkategori');

Route::post('/admin/inputkategori', [CategoryController::class, 'store'])->name('admin.storekategori');

Route::get('/admin/inputpenulis', function () {
    return view('admin.penulisbuku');
});

