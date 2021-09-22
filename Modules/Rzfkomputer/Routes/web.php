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

use Modules\Rzfkomputer\Http\Controllers\RzfkomputerController;


Route::get('/', 'RzfkomputerController@index');
Route::get('/produk',  'RzfkomputerController@product_list')->name('produk-list');
Route::get('/produk/{product}', 'RzfkomputerController@product_detail')->name('produk-detail');
Route::get('/keranjang', function () {
    return view('rzfkomputer::user.keranjang');
})->name('keranjang');
Route::post('/keranjang', 'RzfkomputerController@store_order')->name('store_order');

Route::get('/promo', function () {
    return view('rzfkomputer::user.promo');
})->name('promo');

Route::get('/kontak', function () {
    return view('rzfkomputer::user.kontak');
})->name('kontak');
Route::get('/ordersuccess', function () {
    return view('rzfkomputer::user.order-success');
})->name('ordersuccess');
