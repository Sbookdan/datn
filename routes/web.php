<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\langdingpageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\payController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

//
Route::get('/', [langdingpageController::class, 'index'])->name('index')->middleware('verified');

// login

Route::get('auth/social', [LoginController::class, 'showLoginForm'])->name('social.login');
Route::get('oauth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');

Route::get('/logout', [HomeController::class, 'getLogout'])->name('logout');


// Route::get('/','langdingpageController@index')->name('index');
// Route::get('/blank','langdingpageController@blank');
Route::get('/product', [langdingpageController::class, 'products'])->name('products');
Route::get('/products-{id}', [langdingpageController::class, 'product'])->name('product');


Route::get('/news', [langdingpageController::class, 'news'])->name('news');
Route::get('/contact_user', [langdingpageController::class, 'contact'])->name('contact');
Route::get('/auther', [langdingpageController::class, 'auther'])->name('auther');


Route::get('/search', [SearchController::class, 'search'])->name('search');
// Route::post('/search', [SearchController::class, 'search'])->name('search');

// cart

Route::get('/cartuser', [cartController::class, 'cart'])->name('cart.index');
Route::post('/add', [cartController::class, 'add'])->name('cart.store');

Route::post('/update', [cartController::class, 'update'])->name('cart.update');
Route::post('/remove', [cartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [cartController::class, 'clear'])->name('cart.clear');

// Send Email

Route::post('/message/send', [contactController::class, 'sendEmail'])->name('send.email');

// Profile

Route::get('/profile', [UserController::class, 'profileUser'])->name('profile.user');

// Checkout
Route::get('/cart/checkout', [payController::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout/momo', [payController::class, 'momo'])->name('checkout.momo.order');

// Admin
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');

    // Banner
    Route::get('/banner',                           [App\Http\Controllers\bannerController::class, 'index']);
    Route::get('banner/create',                     [App\Http\Controllers\bannerController::class, 'create']);
    Route::get('banner/store',                      [App\Http\Controllers\bannerController::class, 'store']);
    Route::get('banner/destroy/{id}',               [App\Http\Controllers\bannerController::class, 'destroy']);
    Route::get('banner/edit/{id}',                  [App\Http\Controllers\bannerController::class, 'edit']);
    Route::get('banner/update/{id}',                [App\Http\Controllers\bannerController::class, 'update']);

    // Categories
    Route::get('/categories',                       [App\Http\Controllers\categoriesController::class, 'index']);
    Route::get('categories/create',                 [App\Http\Controllers\categoriesController::class, 'create']);
    Route::get('categories/store',                  [App\Http\Controllers\categoriesController::class, 'store']);
    Route::get('categories/destroy/{id}',           [App\Http\Controllers\categoriesController::class, 'destroy']);
    Route::get('categories/edit/{id}',              [App\Http\Controllers\categoriesController::class, 'edit']);
    Route::get('categories/update/{id}',            [App\Http\Controllers\categoriesController::class, 'update']);

    // Attached
    Route::get('/attached',                         [App\Http\Controllers\attachedController::class, 'index']);
    Route::get('attached/create',                   [App\Http\Controllers\attachedController::class, 'create']);
    Route::get('attached/store',                    [App\Http\Controllers\attachedController::class, 'store']);
    Route::get('attached/destroy/{id}',             [App\Http\Controllers\attachedController::class, 'destroy']);
    Route::get('attached/edit/{id}',                [App\Http\Controllers\attachedController::class, 'edit']);
    Route::get('attached/update/{id}',              [App\Http\Controllers\attachedController::class, 'update']);

    // Users
    Route::get('/users',                            [App\Http\Controllers\usersController::class, 'index']);
    Route::get('users/create',                      [App\Http\Controllers\usersController::class, 'create']);
    Route::get('users/store',                       [App\Http\Controllers\usersController::class, 'store']);
    Route::get('users/destroy/{id}',                [App\Http\Controllers\usersController::class, 'destroy']);
    Route::get('users/update/{id}',                 [App\Http\Controllers\usersController::class, 'update']);
    Route::get('users/edit/{id}',                   [App\Http\Controllers\usersController::class, 'edit']);
    Route::get('tkupdate/{id}/{role}',              [App\Http\Controllers\usersController::class, 'tkupdate']);

    // Contact
    Route::get('/contact_admin',                          [App\Http\Controllers\contactController::class, 'index'])->name('contact.admin');
    Route::get('contact/destroy/{id}',              [App\Http\Controllers\contactController::class, 'destroy']);

    // Comments
    Route::get('/comments',                         [App\Http\Controllers\commentsController::class, 'index']);
    Route::get('comments/destroy/{id}',             [App\Http\Controllers\commentsController::class, 'destroy']);

    // Pay
    Route::get('/pay',                              [App\Http\Controllers\payController::class, 'index']);
    Route::get('/pay/{pay_user_id}',                [App\Http\Controllers\payController::class, 'index']);
    Route::get('pay/destroy/{id}',                  [App\Http\Controllers\payController::class, 'destroy']);
    Route::get('tkup/{id}/{token}',                 [App\Http\Controllers\payController::class, 'tkup']);

    // Cart
    Route::get('/cart',                             [App\Http\Controllers\cartController::class, 'index']);
    Route::get('cart/destroy/{id}',                 [App\Http\Controllers\cartController::class, 'destroy']);

    // Sale
    Route::get('/sale',                             [App\Http\Controllers\saleController::class, 'index']);
    Route::get('sale/create',                       [App\Http\Controllers\saleController::class, 'create']);
    Route::get('sale/edit/{id}',                    [App\Http\Controllers\saleController::class, 'edit']);
    Route::get('sale/store',                        [App\Http\Controllers\saleController::class, 'store']);
    Route::get('sale/destroy/{id}',                 [App\Http\Controllers\saleController::class, 'destroy']);
    Route::get('sale/update/{id}',                  [App\Http\Controllers\saleController::class, 'update']);

    // Publisher
    Route::get('/publisher',                        [App\Http\Controllers\publisherController::class, 'index']);
    Route::get('publisher/create',                  [App\Http\Controllers\publisherController::class, 'create']);
    Route::get('publisher/edit/{id}',               [App\Http\Controllers\publisherController::class, 'edit']);
    Route::get('publisher/store',                   [App\Http\Controllers\publisherController::class, 'store']);
    Route::get('publisher/destroy/{id}',            [App\Http\Controllers\publisherController::class, 'destroy']);
    Route::get('publisher/update/{id}',             [App\Http\Controllers\publisherController::class, 'update']);

    // Product
    Route::get('/products',                         [App\Http\Controllers\productsController::class, 'index']);
    Route::get('products/create',                   [App\Http\Controllers\productsController::class, 'create']);
    Route::get('products/edit/{id}',                [App\Http\Controllers\productsController::class, 'edit']);
    Route::get('products/store',                    [App\Http\Controllers\productsController::class, 'store']);
    Route::get('products/destroy/{id}',             [App\Http\Controllers\productsController::class, 'destroy']);
    Route::get('products/update/{id}',              [App\Http\Controllers\productsController::class, 'update']);
});

Auth::routes();