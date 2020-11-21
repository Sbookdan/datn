<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\langdingpageController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//
Route::get('/', [langdingpageController::class, 'index'])->name('index');

// Route::get('/','langdingpageController@index')->name('index');
// Route::get('/blank','langdingpageController@blank');
Route::get('/products', [langdingpageController::class, 'products'])->name('products');
Route::get('/products-{id}', [langdingpageController::class, 'product'])->name('product');


Route::get('/news', [langdingpageController::class, 'news'])->name('news');
Route::get('/contact', [langdingpageController::class, 'contact'])->name('contact');
Route::get('/auther', [langdingpageController::class, 'auther'])->name('auther');