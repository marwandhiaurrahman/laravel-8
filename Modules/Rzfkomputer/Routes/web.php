<?php

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

use Modules\Product\Entities\CategoryProduct;
use Modules\Product\Entities\Product;

Route::get('/', function () {
    $categoris = CategoryProduct::get();
    $product = Product::find(1)->first();
    return view('rzfkomputer::user.home', compact(['categoris']));
});
Route::get('/produk', function () {
    return view('user.produk');
})->name('produk');
Route::get('/produkdetail', function () {
    return view('user.produk-detail');
})->name('produkdetail');
Route::get('/promo', function () {
    return view('user.promo');
})->name('promo');
Route::get('/keranjang', function () {
    return view('user.keranjang');
})->name('keranjang');
Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');
Route::get('/ordersuccess', function () {
    return view('user.order-success');
})->name('ordersuccess');
