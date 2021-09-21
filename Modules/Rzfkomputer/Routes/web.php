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
Route::get('/produk/{product}', 'RzfkomputerController@product_list')->name('produk-detail');
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
