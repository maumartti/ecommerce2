<?php

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

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('web');
Route::get('/item/{url}', [App\Http\Controllers\WebController::class, 'item'])->name('item');
Route::get('/categoria/{urlCat}/{urlSub?}', [App\Http\Controllers\WebController::class, 'category'])->name('category');
Route::get('/privacidad', [App\Http\Controllers\WebController::class, 'index'])->name('index');
Route::get('/carrito', [App\Http\Controllers\WebController::class, 'cart'])->name('cart');
Route::post('/add-to-cart/{productId}', [App\Http\Controllers\WebController::class, 'addToCart'])->name('addToCart');
Route::post('/clear-cart', [App\Http\Controllers\WebController::class, 'clearCart'])->name('clearCart');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
    Route::post('saveData', [App\Http\Controllers\HomeController::class, 'saveData'])->name('saveData');

    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::get('categoriesAll', [App\Http\Controllers\CategoryController::class, 'all']);
    Route::resource('subcategories', App\Http\Controllers\SubCategoryController::class);
    Route::resource('products', App\Http\Controllers\ProductsController::class);
});

