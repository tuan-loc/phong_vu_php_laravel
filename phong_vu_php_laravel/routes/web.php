<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('user/login', [FrontendController::class, 'login'])->name('login.form');
Route::post('user/login', [FrontendController::class, 'loginSubmit'])->name('login.submit');
Route::get('user/logout', [FrontendController::class, 'logout'])->name('user.logout');

Route::get('user/register', [FrontendController::class, 'register'])->name('register.form');
Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/product-detail/{slug}', [FrontendController::class, 'productDetail'])->name('product-detail');
Route::get('/product/search', [FrontendController::class, 'productSearch'])->name('product.search');
Route::get('/product-category/{id}', [FrontendController::class, 'productCategory'])->name('product-category');
Route::get('/product-brand/{id}', [FrontendController::class, 'productBrand'])->name('product-brand');
Route::get('/product-lists', [FrontendController::class, 'productLists'])->name('product-lists');
Route::match(['get', 'post'], '/product-lists/filter', [FrontendController::class, 'productFilter'])->name('product.filter');

Route::get('/add-to-cart/{slug}', [CartController::class, 'addToCart'])->name('add-to-cart')->middleware('user');
Route::get('cart-delete/{id}', [CartController::class, 'cartDelete'])->name('cart-delete');
Route::post('cart-update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');

    Route::controller(BannerController::class)->group(function () {
        Route::get('/banner', 'index')->name('banner.index');
        Route::get('/banner/create', 'create')->name('banner.create');
        Route::post('/banner/create', 'store')->name('banner.store');
        Route::get('/banner/edit/{id}', 'edit')->name('banner.edit');
        Route::post('/banner/edit/{id}', 'update')->name('banner.update');
        Route::get('/banner/destroy/{id}', 'destroy')->name('banner.destroy');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand', 'index')->name('brand.index');
        Route::get('/brand/create', 'create')->name('brand.create');
        Route::post('/brand/create', 'store')->name('brand.store');
        Route::get('/brand/edit/{id}', 'edit')->name('brand.edit');
        Route::post('/brand/edit/{id}', 'update')->name('brand.update');
        Route::get('/brand/destroy/{id}', 'destroy')->name('brand.destroy');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/create', 'store')->name('category.store');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/edit/{id}', 'update')->name('category.update');
        Route::get('/category/destroy/{id}', 'destroy')->name('category.destroy');
    });

    Route::controller(CouponController::class)->group(function () {
        Route::get('/coupon', 'index')->name('coupon.index');
        Route::get('/coupon/create', 'create')->name('coupon.create');
        Route::post('/coupon/create', 'store')->name('coupon.store');
        Route::get('/coupon/edit/{id}', 'edit')->name('coupon.edit');
        Route::post('/coupon/edit/{id}', 'update')->name('coupon.update');
        Route::get('/coupon/destroy/{id}', 'destroy')->name('coupon.destroy');
    });

    Route::controller(PostController::class)->group(function () {
        Route::get('/post', 'index')->name('post.index');
        Route::get('/post/create', 'create')->name('post.create');
        Route::post('/post/create', 'store')->name('post.store');
        Route::get('/post/edit/{id}', 'edit')->name('post.edit');
        Route::post('/post/edit/{id}', 'update')->name('post.update');
        Route::get('/post/destroy/{id}', 'destroy')->name('post.destroy');
    });

    Route::controller(PostCategoryController::class)->group(function () {
        Route::get('/post-category', 'index')->name('post-category.index');
        Route::get('/post-category/create', 'create')->name('post-category.create');
        Route::post('/post-category/create', 'store')->name('post-category.store');
        Route::get('/post-category/edit/{id}', 'edit')->name('post-category.edit');
        Route::post('/post-category/edit/{id}', 'update')->name('post-category.update');
        Route::get('/post-category/destroy/{id}', 'destroy')->name('post-category.destroy');
    });

    Route::controller(PostTagController::class)->group(function () {
        Route::get('/post-tag', 'index')->name('post-tag.index');
        Route::get('/post-tag/create', 'create')->name('post-tag.create');
        Route::post('/post-tag/create', 'store')->name('post-tag.store');
        Route::get('/post-tag/edit/{id}', 'edit')->name('post-tag.edit');
        Route::post('/post-tag/edit/{id}', 'update')->name('post-tag.update');
        Route::get('/post-tag/destroy/{id}', 'destroy')->name('post-tag.destroy');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('product.index');
        Route::get('/product/create', 'create')->name('product.create');
        Route::post('/product/create', 'store')->name('product.store');
        Route::get('/product/edit/{id}', 'edit')->name('product.edit');
        Route::post('/product/edit/{id}', 'update')->name('product.update');
        Route::get('/product/destroy/{id}', 'destroy')->name('product.destroy');
    });

    Route::controller(UsersController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/user/create', 'store')->name('user.store');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::post('/user/edit/{id}', 'update')->name('user.update');
        Route::get('/user/destroy/{id}', 'destroy')->name('user.destroy');
    });
});