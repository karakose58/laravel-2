<?php

use App\Http\Controllers\AA;

Route::get('/register', [AA::class, 'registerPage'])->name('register.page');
Route::post('/register', [AA::class, 'register'])->name('register');

Route::get('/login', [AA::class, 'loginPage'])->name('login.page');
Route::post('/login', [AA::class, 'login'])->name('login');

Route::get('/home', [AA::class, 'home'])->name('home');

Route::post('/logout', [AA::class, 'logout'])->name('logout');

Route::get('/add', [AA::class, 'add'])->name('add.product');
Route::post('/add', [AA::class, 'store'])->name('store.product');

Route::get('/edit/{id}', [AA::class, 'edit'])->name('edit.product');
Route::put('/update/{id}', [AA::class, 'update'])->name('update.product');

Route::delete('/delete/{id}', [AA::class, 'delete'])->name('delete.product');
Route::get('/show/{id}', [AA::class, 'show'])->name('show.product');
