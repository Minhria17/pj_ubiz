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


Route::get('/gioi-thieu', function () {
    return view('body.introduce');
});
Route::get('/ty-gia-nhan-dan-te', function () {
    return view('body.exchange_rate');
});
Route::get('/tin-tuc', function () {
    return view('body.news');
});
Route::get('/goc-tu-van', function () {
    return view('body.advise');
});
Route::get('/trung-quoc', function () {
    return view('body.china');
});
Route::get('/trung-quoc-ve-viet-nam', function () {
    return view('body.china_vietnam');
});
Route::get('/dich-vu-thanh-toan-ho-tren-1688', function () {
    return view('body.1688');
});
Route::get('/dich-vu-thanh-toan-ho-tren-taobao-qua-alipay-mot-cach-don-gian-de-dang', function () {
    return view('body.taobao');
});
Route::get('/nap-tien-alipay', function () {
    return view('body.alipay');
});
Route::get('/wechat', function () {
    return view('body.wechat');
});
Route::get('/news-detail', function () {
    return view('body.news_detail');
});
Route::get('/admin_ubiz@2022/contact',[AdminController::class,'contact']);
Route::get('/admin_ubiz@2022/delete_contact/{id}',[AdminController::class,'contact_delete']);

Route::post('admin_ubiz@2022/insert_contact',[AdminController::class,'contact_insert']);
// Route::get('/admin_ubiz@2022/insert_contact',[AdminController::class,'contact_insert']);

// Route::post('/admin_ubiz@2022/insert_contact', 'AdminController@contact_insert');