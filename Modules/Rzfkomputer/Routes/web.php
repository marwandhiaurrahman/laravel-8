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

// use Modules\Rzfkomputer\Http\Controllers\ContactController;
// use Modules\Rzfkomputer\Http\Controllers\RzfkomputerController;


Route::get('/', 'RzfkomputerController@index')->name('welcome');
Route::get('/produk',  'RzfkomputerController@product_list')->name('produk-list');
Route::get('/produk/{product}', 'RzfkomputerController@product_detail')->name('produk-detail');
Route::post('/produk/{product}', 'RzfkomputerController@cart_store')->name('cart_store');
Route::delete('/produk/{product}', 'RzfkomputerController@cart_destroy')->name('cart_destroy');

Route::get('/keranjang', function () {
    return view('rzfkomputer::user.keranjang');
})->name('keranjang');

Route::post('/keranjang', 'RzfkomputerController@store_order')->name('store_order');

Route::get('/promo', 'RzfkomputerController@promo_list')->name('promo');

Route::get('/kontak', function () {
    return view('rzfkomputer::user.kontak');
})->name('kontak');

Route::get('/ordersuccess','RzfkomputerController@order_success' )->name('ordersuccess');
Route::get('/orderstatus', function () {
    return view('rzfkomputer::user.order-status');
})->name('orderstatus');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('contact', 'ContactController');
});
