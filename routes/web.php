<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::view('/register', 'register');
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);


Route::get("/", [ProductController::class, 'index']);
Route::get("/products", [ProductController::class, 'products']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'detail'])
    ->whereNumber('id')
    ->name('product.info');
Route::get('search', [ProductController::class, 'search']);
Route::post('cart/add', [ProductController::class, 'addToCart'])->name('cart.add');
Route::get('cart', [ProductController::class, 'cartList'])->name('cart');
Route::get('removecart/{id}', [ProductController::class, 'removeCart'])->name('cart.remove');

Route::get('orders', [ProductController::class, 'myOrders'])->name('orders');
Route::get('order/now', [ProductController::class, 'orderNow'])->name('order.now');
Route::post('order/place', [ProductController::class, 'orderPlace'])->name('order.place');

Route::get('checkout', [ProductController::class, 'checkOut'])->name('check.out');






