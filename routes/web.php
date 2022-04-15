<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;

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

Route::get('/list-products', [UserController::class, 'getListProduct'])
    ->name('user.listProduct');

Route::get('/list-product/product/{id}', [UserController::class, 'detailProduct'])
    ->name('user.detailProduct');
