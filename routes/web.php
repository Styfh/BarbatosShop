<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [NavigationController::class, 'getIndexPage']);
Route::get('/login', [NavigationController::class, 'getLoginPage']);
Route::get('/register', [NavigationController::class, 'getRegisterPage']);

Route::post('/register/action', [UserController::class, 'actionregister']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/manage', [NavigationController::class, 'getManagePage']);
Route::get('/add', [NavigationController::class, 'getAddPage']);
Route::post('/add', [ProductController::class, 'addProduct']);
Route::get('/update/{id}', [NavigationController::class, 'getUpdatePage']);
Route::post('/update/{id}', [ProductController::class, 'updateProduct']);
Route::get('/delete/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/profile/{id}', [NavigationController::class, 'getProfilePage']);
Route::get('/category/{category_id}', [NavigationController::class, 'getCategoryPage']);

Route::get('/product/{product_id}', [NavigationController::class, 'getProductPage']);

Route::get('/cart', [NavigationController::class, 'getCartPage']);
Route::post('/cart-add/{product_id}', [TransactionController::class, 'cartAdd']);
Route::post('/cart-remove/{product_id}', [TransactionController::class, 'cartDelete']);
Route::post('/purchase', [TransactionController::class, 'cartPurchase']);

Route::get('/history', [NavigationController::class, 'getHistoryPage']);

Route::get('/search', [NavigationController::class, 'getSearchPage']);
