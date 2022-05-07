<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ProductController;

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

Route::get('/', [UserController::class, 'homePage'])
    ->name('user.homePage');

Route::get('/about-us', [UserController::class, 'aboutUs'])
    ->name('user.aboutUs');

Route::get('/contact', [UserController::class, 'contact'])
    ->name('user.contact');

Route::post('/contact', [UserController::class, 'postContact'])
    ->name('user.postContact');

Route::get('/list-cate', [ProductController::class, 'getListCate'])
    ->name('user.listCate');

Route::get('/list-products', [ProductController::class, 'getListProduct'])
    ->name('user.listProduct');

Route::get('/list-products/product/{id}', [ProductController::class, 'detailProduct'])
    ->name('user.detailProduct');
