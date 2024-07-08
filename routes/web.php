<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CapchaController;
use App\Http\Controllers\GeleryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\OpeningController;
use App\Http\Controllers\SlidderController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\MainmenuController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CategoryblogController;
use App\Http\Controllers\CategoryportoController;
use App\Http\Controllers\IklanController;


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


Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'detailBlog'])->name('detail.blog');
Route::get('/blog/category/{category}', [PageController::class, 'filterBlog'])->name('filter.blog');
Route::get('/search/blog', [PageController::class, 'blogSearch'])->name('blog.search');
Route::get('/price', [PageController::class, 'price'])->name('price');

Route::get('/reload-captcha', [CapchaController::class, 'reloadCaptcha']);
Route::get('portofolio', [PageController::class, 'portofolio'])->name('portofolio');
Route::middleware('isLogin')->group(function () {
    Route::prefix('dashboard/admin/')->group(function () {
        Route::get('/', [PageController::class, 'admin'])->name('dashboard');
        Route::prefix('master-data/')->group(function () {
            Route::resource('testimonial', TestimonialController::class);
            Route::get('search/testimonial', [TestimonialController::class, 'search'])->name('search.testimonial');
            Route::resource('category-porto', CategoryportoController::class);
            Route::get('search/categoryporto', [CategoryportoController::class, 'search'])->name('search.categoryporto');
            Route::resource('category-blog', CategoryblogController::class);
            Route::get('search/category-blog', [CategoryblogController::class, 'search'])->name('search.categroyblog');
            Route::resource('galery', GeleryController::class);
            Route::resource('/iklan', IklanController::class);
        });
       
        Route::resource('blog', BlogController::class);
        Route::get('search/blog', [BlogController::class, 'search'])->name('search.blog');
        Route::prefix('manajemen-menu/')->group(function () {
            Route::resource('main-menu', MainmenuController::class);
            Route::resource('sub-menu', SubmenuController::class);
          
        });
        Route::prefix('konfigurasi/')->group(function () {
            Route::get('template', [TemplateController::class, 'index'])->name('template.index');
            Route::patch('template/update', [TemplateController::class, 'update'])->name('template.update');
            Route::get('/general', [GeneralController::class, 'index'])->name('general.index');
            Route::patch('/general/update', [GeneralController::class, 'update'])->name('general.update');
        });
        
        Route::resource('portofolio', PortofolioController::class);
        Route::get('search/portofolio', [PortofolioController::class, 'search'])->name('search.portofolio');
    });
});

Route::middleware('isGuest')->group(function () {
    Route::get('/join', [LoginController::class, 'login']);
    Route::post('/dashboard/admin/auth', [LoginController::class, 'auth'])->name('login.auth');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
