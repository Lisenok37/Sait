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

Route::get('/woman', function () {
    return view('woman');
});

Route::get('/child', function () {
    return view('child');
});

Route::get('/dostavka', function () {
    return view('dostavka');
});

Route::get('/korzina', function () {
    return view('korzina');
});
