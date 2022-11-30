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
    return view('body.home');
});

Route::get('/contact', function () {
    return view('body.contact');
});
Route::get('/introduce', function () {
    return view('body.introduce');
});
Route::get('/exchange-rate', function () {
    return view('body.exchange_rate');
});
Route::get('/news', function () {
    return view('body.news');
});
Route::get('/advise', function () {
    return view('body.advise');
});
