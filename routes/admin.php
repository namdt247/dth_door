<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactController;

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

Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'postLogin']);

Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['user','role_or_permission:supper-admin|admin|editor']
], function() {
    Route::get('/dashboard', [AdminController::class, 'home']);

    # region user
    Route::group(['prefix' => 'user'], function(){
        Route::get('/list', [UserController::class, 'getListUser']);
    });
    # endregion

    # region category
    Route::group(['prefix' => 'cate'], function(){
        Route::get('/list', [CategoryController::class, 'getListCatePagination']);
        Route::get('/add', [CategoryController::class, 'getAddCate']);
        Route::post('/add', [CategoryController::class, 'createCate']);
        Route::get('/detail', [CategoryController::class, 'getDetailCate']);
        Route::post('/detail', [CategoryController::class, 'updateCate']);
        Route::get('/delete/{id}', [CategoryController::class, 'deleteCate']);
    });
    # endregion

    # region product
    Route::group(['prefix' => 'product'], function(){
        Route::get('/list', [ProductController::class, 'getListProduct']);
        Route::get('/add', [ProductController::class, 'getAddProduct']);
        Route::post('/add', [ProductController::class, 'addProduct']);
        Route::get('/detail', [ProductController::class, 'detailProduct']);
        Route::post('/detail', [ProductController::class, 'updateProduct']);
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct']);
    });
    # endregion

    # region contact
    Route::group(['prefix' => 'contact'], function(){
        Route::get('/list', [ContactController::class, 'getListContact']);
        Route::get('/detail', [ContactController::class, 'getDetailContact']);
        Route::post('/detail', [ContactController::class, 'updateContact']);
        Route::get('/delete/{id}', [ContactController::class, 'deleteContact']);
    });
    # endregion
});
