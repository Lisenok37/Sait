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

Route::get('/auth', 'AuthController@auth');
Route::middleware('/auth')->group(function(){
  Route::get('/logout', 'AuthController@logout');
});

Route::get('/index', 'ApiController@indexAction');
Route::get('/woman', 'ApiController@womanAction');
Route::get('/child', 'ApiController@childAction');
Route::get('/dostavka', 'ApiController@dostavkaAction');
Route::get('/korzina', 'ApiController@korzinaAction');
Route::get('/register', 'ApiController@registerAction');
Route::get('/getBaskets', 'ApiController@getBaskets');
Route::get('/getProducts', 'ApiController@getProducts');
