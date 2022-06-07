<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/admin/dashboard', [AdminController::class, 'home'])
    ->name('admin.home')
    ->middleware('user')
    ->middleware(['middleware' => 'role_or_permission:supper-admin|admin|editor']);
