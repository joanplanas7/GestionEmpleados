<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\LoginControler;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->middleware('auth');

Route::get('/login', [LoginControler::class, 'index'])->name('login.index');
Route::get('/register', [RegisterControler::class, 'index'])->name('register.index');

Route::post('/register', [RegisterControler::class, 'store'])->name('register.store');
Route::post('/login', [LoginControler::class, 'store'])->name('login.store');

Route::get('/logout', [LoginControler::class, 'destroy'])->name('login.destroy');


Route::resource('/empleados', EmpleadosController::class)->except('show')->middleware('auth');;