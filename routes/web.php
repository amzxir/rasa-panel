<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\panel\product\ProductControllers;
use App\Http\Controllers\panel\user\UserControllers;
use App\Http\Controllers\panel\motor\MotorControllers;
use App\Http\Controllers\panel\brand\BrandControllers;
use App\Http\Controllers\panel\category\CategoryControllers;
use App\Http\Controllers\panel\slider\SliderControllers;
use App\Http\Controllers\panel\faq\FaqControllers;
use App\Http\Controllers\panel\provision\ProvisionControllers;
use App\Http\Controllers\panel\about\AboutControllers;
use App\Http\Controllers\panel\send\SendControllers;
use App\Http\Controllers\panel\route\RouteControllers;
use App\Http\Controllers\panel\advertise\AdvertiseControllers;
use App\Http\Controllers\panel\discount\DiscountControllers;
use App\Http\Controllers\panel\contact\ContactControllers;
use App\Http\Controllers\panel\comission\ComissionControllers;
use App\Http\Controllers\panel\auth\AuthControllers;
use App\Http\Controllers\panel\rasajet\RasajetControllers;






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
Route::get('/motor-field-make', [MotorControllers::class, 'create'])->name('motor-field-make');
Route::get('/motor-field-manage', [MotorControllers::class, 'manage'])->name('motor-field-manage');
Route::get('/create-brand', [BrandControllers::class, 'create'])->name('create-brand');
Route::get('/manage-brand', [BrandControllers::class, 'manage'])->name('manage-brand');
Route::get('/create-category', [CategoryControllers::class, 'create'])->name('create-category');
Route::get('/manage-category', [CategoryControllers::class, 'manage'])->name('manage-category');
Route::get('/category-tree-view', [CategoryControllers::class, 'tree'])->name('category-tree-view');
Route::get('/slider', [SliderControllers::class, 'index'])->name('slider');
Route::get('/privacy', [FaqControllers::class, 'index'])->name('privacy');
Route::get('/provision', [ProvisionControllers::class, 'index'])->name('provision');
Route::get('/about', [AboutControllers::class, 'index'])->name('about');
Route::get('/send', [SendControllers::class, 'index'])->name('send');
Route::get('/create-redirect', [RouteControllers::class, 'create'])->name('create-redirect');
Route::get('/manage-redirect', [RouteControllers::class, 'manage'])->name('manage-redirect');
Route::get('/advertise', [AdvertiseControllers::class, 'index'])->name('advertise');
Route::get('/discount', [DiscountControllers::class, 'index'])->name('discount');
Route::get('/contact', [ContactControllers::class, 'index'])->name('contact');
Route::get('/comission', [ComissionControllers::class, 'index'])->name('comission');
Route::get('/auth', [AuthControllers::class, 'index'])->name('auth');
Route::get('/rasajet', [RasajetControllers::class, 'index'])->name('rasajet');












