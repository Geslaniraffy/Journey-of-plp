<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});
Route::get('/Blog', function () {
    return view('Blog');
});
Route::get('/Comsoc', function () {
    return view('Comsoc');
});
Route::get('/PLP-SSC', function () {
    return view('PLP_SSC');
});
Route::get('/Faculty', function () {
    return view('Faculty');
});

