<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\panel\product\ProductControllers;
use App\Http\Controllers\panel\user\UserControllers;


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


Route::get('/', [HomeControllers::class, 'index'])->name('/');

Route::get('/create-product', [ProductControllers::class, 'create'])->name('create-product');
Route::get('/manage-product', [ProductControllers::class, 'manage'])->name('manage-product');
Route::get('/edit-product', [ProductControllers::class, 'edit'])->name('edit-product');
Route::get('/create-user', [UserControllers::class, 'create'])->name('create-user');
Route::get('/manage-user', [UserControllers::class, 'manage'])->name('manage-user');



