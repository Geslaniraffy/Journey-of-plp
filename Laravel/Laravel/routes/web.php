<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginSystemController;
use App\Http\Controllers\LogoutController;


Route::get('/home', function () {
    return view('index');
})->name('home')->middleware(['auth']);

Route::get('/Blog', function () {
    return view('Blog');
})->middleware(['auth']);

Route::get('/Comsoc', function () {
    return view('Comsoc');
})->middleware(['auth']);

Route::get('/PLP-SSC', function () {
    return view('PLP_SSC');
})->middleware(['auth']);

Route::get('/Faculty', function () {
    return view('Faculty');
})->middleware(['auth']);


Route::get('/', [LoginSystemController::class, 'loginIndex'])->name('login');
Route::post('/', [LoginSystemController::class, 'login']);
Route::get('/register', [LoginSystemController::class, 'registerIndex'])->name('register');
Route::post('/register', [LoginSystemController::class, 'storeInformation']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout']);

