<?php

use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginControler::class, 'index'])->name('login.index');
Route::get('/register', [RegisterControler::class, 'index'])->name('login.index');
