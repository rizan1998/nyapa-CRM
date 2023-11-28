<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesCardController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\StartedController;

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

Route::get('/price/create', function () {
    return view('admin.price.form');
});
Route::get('/price', function () {
    return view('admin.price.index');
});


//Route Landingpage
Route::get('/', [HomepageController::class, 'index']);


//route Autentikasi
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/banner', [DashboardController::class, 'banner']);
Route::get('profile/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('profile/{id}/update', [UserController::class, 'update'])->name('user.update');


//route price
Route::get('/price', [PriceController::class, 'index'])->name('admin.price.index');
Route::get('/price/create', [PriceController::class, 'create'])->name('admin.price.create');
Route::post('/price', [PriceController::class, 'store'])->name('admin.price.store');
Route::get('/price/{id}/edit', [PriceController::class, 'edit'])->name('admin.price.edit');
Route::put('/price/{id}', [PriceController::class, 'update'])->name('admin.price.update');
Route::delete('/price/delete/{id}', [PriceController::class, 'destroy'])->name('admin.price.destroy');

//route testimonial
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
Route::post('/testimonial', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
Route::get('/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
Route::put('/testimonial/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
Route::delete('/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');

//route banner
Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
Route::get('/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');
Route::get('/banner/{id}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');
Route::put('/banner/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
Route::delete('/banner/delete/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');

//route Social
Route::get('/social', [SocialController::class, 'index'])->name('admin.social.index');
Route::get('/social/create', [SocialController::class, 'create'])->name('admin.social.create');
Route::post('/social', [SocialController::class, 'store'])->name('admin.social.store');
Route::get('/social/{id}/edit', [SocialController::class, 'edit'])->name('admin.social.edit');
Route::put('/social/{id}', [SocialController::class, 'update'])->name('admin.social.update');
Route::delete('/social/delete/{id}', [SocialController::class, 'destroy'])->name('admin.social.destroy');

//route Icon
Route::get('/icon', [IconController::class, 'index'])->name('admin.icon.index');
Route::get('/icon/create', [IconController::class, 'create'])->name('admin.icon.create');
Route::post('/icon', [IconController::class, 'store'])->name('admin.icon.store');
Route::get('/icon/{id}/edit', [IconController::class, 'edit'])->name('admin.icon.edit');
Route::put('/icon/{id}', [IconController::class, 'update'])->name('admin.icon.update');
Route::delete('/icon/delete/{id}', [IconController::class, 'destroy'])->name('admin.icon.destroy');

//route Product
Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/product', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');

//route Service
Route::get('/service', [ServicesController::class, 'index'])->name('admin.service.index');
Route::get('/service/create', [ServicesController::class, 'create'])->name('admin.service.create');
Route::post('/service', [ServicesController::class, 'store'])->name('admin.service.store');
Route::get('/service/{id}/edit', [ServicesController::class, 'edit'])->name('admin.service.edit');
Route::put('/service/{id}', [ServicesController::class, 'update'])->name('admin.service.update');
Route::delete('/service/delete/{id}', [ServicesController::class, 'destroy'])->name('admin.service.destroy');

//route Service Card
Route::get('/service-card', [ServicesCardController::class, 'index'])->name('admin.service-card.index');
Route::get('/service-card/create', [ServicesCardController::class, 'create'])->name('admin.service-card.create');
Route::post('/service-card', [ServicesCardController::class, 'store'])->name('admin.service-card.store');
Route::get('/service-card/{id}/edit', [ServicesCardController::class, 'edit'])->name('admin.service-card.edit');
Route::put('/service-card/{id}', [ServicesCardController::class, 'update'])->name('admin.service-card.update');
Route::delete('/service-card/delete/{id}', [ServicesCardController::class, 'destroy'])->name('admin.service-card.destroy');

//route Hero
Route::get('/hero', [HeroController::class, 'index'])->name('admin.hero.index');
Route::get('/hero/create', [HeroController::class, 'create'])->name('admin.hero.create');
Route::post('/hero', [HeroController::class, 'store'])->name('admin.hero.store');
Route::get('/hero/{id}/edit', [HeroController::class, 'edit'])->name('admin.hero.edit');
Route::put('/hero/{id}', [HeroController::class, 'update'])->name('admin.hero.update');
Route::delete('/hero/delete/{id}', [HeroController::class, 'destroy'])->name('admin.hero.destroy');

//route Started
Route::get('/started', [StartedController::class, 'index'])->name('admin.started.index');
Route::get('/started/create', [StartedController::class, 'create'])->name('admin.started.create');
Route::post('/started', [StartedController::class, 'store'])->name('admin.started.store');
Route::get('/started/{id}/edit', [StartedController::class, 'edit'])->name('admin.started.edit');
Route::put('/started/{id}', [StartedController::class, 'update'])->name('admin.started.update');
Route::delete('/started/delete/{id}', [StartedController::class, 'destroy'])->name('admin.started.destroy');

