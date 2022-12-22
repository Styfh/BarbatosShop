<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::get('/category/{category_id}', [NavigationController::class, 'getCategoryPage']);

Route::get('/product/{product_id}', [NavigationController::class, 'getProductPage']);
