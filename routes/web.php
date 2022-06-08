<?php

use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/login', [LoginControler::class, 'index'])->name('login.index');
Route::get('/register', [RegisterControler::class, 'index'])->name('register.index');

Route::post('/register', [RegisterControler::class, 'store'])->name('register.store');
Route::post('/login', [LoginControler::class, 'store'])->name('login.store');