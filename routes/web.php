<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// backend // admin=========================>

Route::get('login', 'App\Http\Controllers\loginController@index');
Route::post('proses', 'App\Http\Controllers\loginController@process_login');
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    });
    Route::resource('biodata', 'App\Http\Controllers\BiodataController');
    Route::get('biodata/{id}', 'App\Http\Controllers\BiodataController@deleteb');

    Route::resource('stok', 'App\Http\Controllers\StokController');
    Route::get('deletestok/{id}', 'App\Http\Controllers\StokController@deletestok');

    Route::resource('satuan', 'App\Http\Controllers\SatuanController');
    Route::resource('kategori', 'App\Http\Controllers\kategoryController');
    Route::resource('pelanggan', 'App\Http\Controllers\pelangganController');
    Route::resource('mutasi', 'App\Http\Controllers\Mutasicontroller');

    Route::get('logout', 'App\Http\Controllers\loginController@logout');
});



// frontend // user===================>
Route::get('/', 'App\Http\controllers\ProductController@home');
route::get('auth', 'App\Http\controllers\AuthController@index');
route::post('auth', 'App\Http\controllers\AuthController@proces_auth');
route::get('register', 'App\Http\controllers\AuthController@register');
route::get('forgot_password', 'App\Http\controllers\AuthController@forgot_password');

Route::get('produk/search', 'App\Http\Controllers\ProductController@search');
Route::get('produk', 'App\Http\Controllers\ProductController@index');
Route::get('detail/{id}', 'App\Http\Controllers\ProductController@detail');

Route::group(['middleware' => 'user'], function () {

    Route::get('cart', 'App\Http\Controllers\CartController@index');
    Route::post('addcart', 'App\Http\Controllers\CartController@addcart');
    Route::get('deletecart/{id}', 'App\Http\Controllers\CartController@deletecart');
    Route::get('deleteall', 'App\Http\Controllers\CartController@deleteall');

    Route::get('checkout', 'App\Http\Controllers\CartController@checkout');
    Route::post('addcheckout', 'App\Http\Controllers\CartController@addcheckout');

    Route::get('order', 'App\Http\Controllers\CartController@order');
});
Route::get('contact', function () { return view('frontend.contact.contact');  });
route::get('log_out', 'App\Http\controllers\AuthController@log_out');

