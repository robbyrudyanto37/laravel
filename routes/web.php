<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use app\Http\Controllers\UserController;


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

Auth::routes();



Route::get('/', function () {
    return view('content.home');
});

Route::get('/myprofile', function () {
    return view('content.profile');
})->middleware('verified');

Route::get('/userhome', function () {
    return view('content.home');
});

Route::get('/about', function () {
    return view('content.about');
})->name('about')->middleware('verified');

Route::get('/shopcart', function () {
    return view('content.shoppingcart');
})->name('shopcart')->middleware('verified');

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

//Route::get('profile', 'UserController@profile')->name('myprofile');
Route::get('profile', 'app\Http\Controllers\UserController@profile')->name('profile');

Route::get('products', 'App\Http\Controllers\ProductsController@products')->name('products');

Route::get('cart', 'App\Http\Controllers\CartController@cart')->name('cart');

Route::get('productsform', 'App\Http\Controllers\ProductsController@form')->name('productsform');
Route::get('cartform', 'App\Http\Controllers\CartController@form')->name('cartform');

Route::get('users', 'App\Http\Controllers\UserController@form')->name('users');

Route::post('addProducts', 'App\Http\Controllers\ProductsController@addProducts')->name('addProducts');
Route::post('addCart', 'App\Http\Controllers\CartController@addCart')->name('addCart');

Route::get('login','App\Http\Controllers\LoginController@login')->name('login_form');

Auth::routes();

Route::get('/email/verify', function (){
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request){
    $request->fulfill();

    return redirect('/');
})->middleware('auth','signed')->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request){
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware('auth','throttle:6,1')->name('verification.resend');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});
