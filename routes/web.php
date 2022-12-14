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

Route::get('/', [AdminController::class,'getHome']); 

Route::get('/contact', function () {
    return view('body.contact');
});



Route::get('/admin_ubiz@2022', function () {
    return view('admin_cms.home');
});

//news
Route::get('/admin_ubiz@2022/news',[AdminController::class,'getIndex']);
Route::get('/admin_ubiz@2022/add_news',[AdminController::class,'getAdd_news']);
Route::post('/admin_ubiz@2022/add_news',[AdminController::class,'news_add']);
Route::get('/admin_ubiz@2022/edit_news/{id}',[AdminController::class,'getEdit_news']);
Route::post('/admin_ubiz@2022/edit_news/{id}',[AdminController::class,'news_edit']);
Route::get('/admin_ubiz@2022/delete_news/{id}',[AdminController::class,'news_delete']);

//news_Catogory
Route::get('/admin_ubiz@2022/list_news_cat',[AdminController::class,'news_cat_list']);
Route::get('/admin_ubiz@2022/edit_news_cat/{id}',[AdminController::class,'news_cat_getedit']);
Route::post('/admin_ubiz@2022/edit_news_cat/{id}',[AdminController::class,'news_cat_edit']);
Route::get('/admin_ubiz@2022/add_news_cat',[AdminController::class,'news_cat_getadd']);
Route::post('/admin_ubiz@2022/add_news_cat',[AdminController::class,'news_cat_add']);
Route::get('/admin_ubiz@2022/delete_news_cat/{id}',[AdminController::class,'news__cat_delete']);

//rate-tỉ giá
Route::get('/admin_ubiz@2022/edit_rate/{id}',[AdminController::class,'getRateEdit']);
Route::post('/admin_ubiz@2022/edit_rate/{id}',[AdminController::class,'RateEdit']);




Route::get('/gioi-thieu', function () {
    return view('body.introduce');
});
Route::get('/ty-gia-nhan-dan-te',  [AdminController::class,'getExchange_rate']);

Route::get('/tin-tuc', [AdminController::class,'getNews']);

Route::get('/goc-tu-van', [AdminController::class,'getAdvise']);

Route::get('/trung-quoc',[AdminController::class,'getchangeTrung']);


Route::get('/trung-quoc-ve-viet-nam',[AdminController::class,'getchangeTrung_Viet']);


Route::get('/dich-vu-thanh-toan-ho-tren-1688', function () {
    return view('body.1688');
});
Route::get('/dich-vu-thanh-toan-ho-tren-taobao-qua-alipay-mot-cach-don-gian-de-dang', function () {
    return view('body.taobao');
});



Route::get('/nap-tien-alipay', [AdminController::class,'getRecharge']);

Route::get('/wechat', [AdminController::class,'getWebchat']);


// Route::get('/news-detail', function () {
//     return view('body.news_detail');
// });


Route::get('/tin-tuc/{id}',[AdminController::class,'getNews_detail'])->name('news_detail');

Route::get('/admin_ubiz@2022/contact',[AdminController::class,'contact']);
Route::get('/admin_ubiz@2022/delete_contact/{id}',[AdminController::class,'contact_delete']);

Route::post('admin_ubiz@2022/insert_contact',[AdminController::class,'contact_insert']);


