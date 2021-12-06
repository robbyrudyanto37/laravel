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
    return view('content.home');
});

Route::get('dashboard', function (){
    return view('admin.dashboard');
});

Route::get('/home', function () {
    return view('content.home');
});

Route::get('/about', function () {
    return view('content.about');
});

Route::get('/productscatalog', function () {
    return view('content.products');
});

Route::get('/shopcart', function () {
    return view('content.shoppingcart');
});

Route::get('/single-product-jw1', function () {
    return view('sp.single-product jw1');
});

Route::get('/single-product-jw2', function () {
    return view('sp.single-product jw2');
});

Route::get('/single-product-hoodie', function () {
    return view('sp.single-product hoodie');
});

Route::get('/single-product-shoes', function () {
    return view('sp.single-product shoes');
});

Route::get('/single-product-sbag1', function () {
    return view('sp.single-product sbag1');
});

Route::get('/single-product-sbag2', function () {
    return view('sp.single-product sbag2');
});

Route::get('/single-product-jacket', function () {
    return view('sp.single-product jacket');
});

Route::get('/single-product-jm1', function () {
    return view('sp.single-product jm1');
});

Route::get('/single-product-jm2', function () {
    return view('sp.single-product jm2');
});

Route::get('products', 'App\Http\Controllers\ProductsController@products')->name('products');
Route::get('cart', 'App\Http\Controllers\CartController@cart')->name('cart');

Route::get('productsform', 'App\Http\Controllers\ProductsController@form')->name('productsform');
Route::get('cartform', 'App\Http\Controllers\CartController@form')->name('cartform');

Route::post('addProducts', 'App\Http\Controllers\ProductsController@addProducts')->name('addProducts');
Route::post('addCart', 'App\Http\Controllers\CartController@addCart')->name('addCart');

Route::get('login','App\Http\Controllers\LoginController@login')->name('login_form');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
