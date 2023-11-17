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
Route::get('/contacto', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
Route::get('/nosotros', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/blog/{url?}', [App\Http\Controllers\WebController::class, 'blog'])->name('blog');
Route::get('/blog/categoria/{url?}', [App\Http\Controllers\WebController::class, 'blogCategory'])->name('blogCategory');
Route::get('/blog/tag/{url?}', [App\Http\Controllers\WebController::class, 'blogTag'])->name('blogTag');
Route::get('/carrito', [App\Http\Controllers\WebController::class, 'cart'])->name('cart');
Route::get('/destacados', [App\Http\Controllers\WebController::class, 'featured'])->name('featured');
Route::post('/add-to-cart/{productId}', [App\Http\Controllers\WebController::class, 'addToCart'])->name('addToCart');
Route::get('/quit-to-cart/{productId}', [App\Http\Controllers\WebController::class, 'quitToCart'])->name('quitToCart');
Route::post('/add-to-favorite/{productId}', [App\Http\Controllers\WebController::class, 'addToFavorite'])->name('addToFavorite');
Route::get('/quit-to-favorite/{productId}', [App\Http\Controllers\WebController::class, 'quitToFavorite'])->name('quitToFavorite');
Route::post('/clear-cart', [App\Http\Controllers\WebController::class, 'clearCart'])->name('clearCart');
Route::post('/actualizar-carrito/{productId}', [App\Http\Controllers\WebController::class, 'actualizarCarrito'])->name('actualizarCarrito');
Route::post('/message', [App\Http\Controllers\MessageController::class, 'store']);
Route::post('/subscriber', [App\Http\Controllers\SubscriberController::class, 'store']);

Auth::routes([
    'verify'=> true,
]);
Route::get('/login', [App\Http\Controllers\WebController::class, 'login'])->name('login');
Route::get('/registro', [App\Http\Controllers\WebController::class, 'register'])->name('registro');
Route::get('/password/reset/{token}', [App\Http\Controllers\WebController::class, 'passwordreset'])->name('password.reset');
Route::get('/password/confirm', [App\Http\Controllers\WebController::class, 'passwordconfirm'])->name('passwordconfirm');
Route::get('/password/email', [App\Http\Controllers\WebController::class, 'passwordemail'])->name('passwordemail');
Route::get('/email/verify', [App\Http\Controllers\WebController::class, 'verifyregister'])->name('verification.notice');


Route::prefix('admin')->middleware(['auth', 'verifyemail'])->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
    Route::post('saveData', [App\Http\Controllers\HomeController::class, 'saveData'])->name('saveData');
    Route::post('saveDataAbout', [App\Http\Controllers\HomeController::class, 'saveDataAbout'])->name('saveDataAbout');
    //Route::post('saveDataBlog', [App\Http\Controllers\BlogController::class, 'saveDataBlog'])->name('saveDataBlog');
    //Route::post('addTag', [App\Http\Controllers\HomeController::class, 'addTag'])->name('addTag');

    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::get('categoriesAll', [App\Http\Controllers\CategoryController::class, 'all']);
    Route::post('categoriesReOrder', [App\Http\Controllers\CategoryController::class, 'reOrder']);
    Route::resource('subcategories', App\Http\Controllers\SubCategoryController::class);
    Route::resource('products', App\Http\Controllers\ProductsController::class);
    Route::resource('shipping', App\Http\Controllers\ShippingController::class);
    Route::resource('shipping_companies', App\Http\Controllers\ShippingCompaniesController::class);
    Route::resource('shipping_office_company_region', App\Http\Controllers\ShippingOfficeCompanyRegionController::class);
    Route::resource('regions', App\Http\Controllers\RegionsController::class);
    Route::resource('region_company', App\Http\Controllers\RegionCompanyController::class);
    Route::resource('activity', App\Http\Controllers\ActivityController::class);
    Route::resource('accounts', App\Http\Controllers\AccountsController::class);
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('payments', App\Http\Controllers\PaymentController::class);
    Route::resource('purchases', App\Http\Controllers\PurchaseController::class);
    Route::resource('profile', App\Http\Controllers\UserController::class);
    Route::resource('blog', App\Http\Controllers\BlogController::class);
    Route::resource('blog_category', App\Http\Controllers\BlogCategoryController::class);
    Route::resource('message', App\Http\Controllers\MessageController::class);
    Route::resource('subscriber', App\Http\Controllers\SubscriberController::class);
    Route::resource('user_type', App\Http\Controllers\UserTypeController::class);
});


Route::resource('payments', App\Http\Controllers\PaymentController::class);

//webPay
Route::get('/webpay/pagar/{paymentId}', [App\Http\Controllers\WebpayController::class, 'webpay_pagar'])->name('webpay_pagar');
Route::get('/webpay/respuesta', [App\Http\Controllers\WebpayController::class, 'webpay_respuesta'])->name('webpay_respuesta');
//mercado-pago
Route::get('/mercadopago/pagar/{data}', [App\Http\Controllers\MercadopagoController::class, 'mercadopago_pagar'])->name('mercadopago_pagar');
Route::get('/mercadopago/respuesta', [App\Http\Controllers\MercadopagoController::class, 'mercadopago_respuesta'])->name('mercadopago_respuesta');
Route::post('/mercadopagohooks',[App\Http\Controllers\MercadopagoController::class, 'mercadopagohooks'])->name('mercadopagohooks');
//banco
Route::get('/bank/pagar/{data}', [App\Http\Controllers\BankPayController::class, 'bank_pagar'])->name('bank_pagar');
Route::post('/bankconfirmpay',[App\Http\Controllers\BankPayController::class, 'confirm_pay_bank'])->name('confirm_pay_bank');
