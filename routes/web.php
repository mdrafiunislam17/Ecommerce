<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\ProductAttrubuteController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\subCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
//Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
//Route::get('/seller', [HomeController::class, 'seller'])->name('seller');

//admin routes


Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/settings', 'setting')->name('admin.settings');
        Route::get('/manage/users', 'manage_user')->name('admin.manage.user');
        Route::get('/manage/stores', 'manage_stores')->name('admin.manage.store');
        Route::get('/cart/history', 'cart_history')->name('admin.cart.history');
        Route::get('/order/history', 'order_history')->name('admin.order.history');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/create', 'index')->name('admin.category.create');
        Route::get('/category/manage', 'manage')->name('admin.category.manage');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/sub/category/create', 'index')->name('admin.sub.category.create');
        Route::get('/sub/category/manage', 'manage')->name('admin.sub.category.manage');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/manage', 'index')->name('admin.product.manage');
        Route::get('/product/review/manage', 'review_manage')->name('admin.product.review.manage');
    });

    Route::controller(ProductAttrubuteController::class)->group(function () {
        Route::get('/product/attrubute/create', 'index')->name('admin.product.attrubute.create');
        Route::get('/product/attrubute/manage', 'manage')->name('admin.product.attrubute.manage');
    });

    Route::controller(DiscountController::class)->group(function () {
        Route::get('/discount/create', 'index')->name('admin.discount.create');
        Route::get('/discount/manage', 'manage')->name('admin.discount.manage');
    });
});






