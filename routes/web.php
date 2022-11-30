<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;   

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


Route::get('/admin_ubiz@2022', function () {
    return view('admin_cms.home');
});

Route::get('/admin_ubiz@2022/news',[AdminController::class,'getIndex']);
Route::get('/admin_ubiz@2022/add_news',[AdminController::class,'getAdd_news']);
Route::post('/admin_ubiz@2022/add_news',[AdminController::class,'news_add']);
Route::get('/admin_ubiz@2022/edit_news/{id}',[AdminController::class,'getEdit_news']);
Route::post('/admin_ubiz@2022/edit_news/{id}',[AdminController::class,'news_edit']);
Route::get('/admin_ubiz@2022/delete_news/{id}',[AdminController::class,'news_delete']);


Route::get('/admin_ubiz@2022/list_news_cat',[AdminController::class,'news_cat_list']);
Route::get('/admin_ubiz@2022/edit_news_cat/{id}',[AdminController::class,'news_cat_getedit']);
Route::post('/admin_ubiz@2022/edit_news_cat/{id}',[AdminController::class,'news_cat_edit']);
Route::get('/admin_ubiz@2022/add_news_cat',[AdminController::class,'news_cat_getadd']);
Route::post('/admin_ubiz@2022/add_news_cat',[AdminController::class,'news_cat_add']);
Route::get('/admin_ubiz@2022/delete_news_cat/{id}',[AdminController::class,'news__cat_delete']);


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

