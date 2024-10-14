<?php

use App\Http\Controllers\Honda\BioDataController;
use App\Http\Controllers\Honda\HomeController;
use App\Http\Controllers\Honda\PricelistController;
use App\Http\Controllers\Honda\ServiceController;
use App\Http\Controllers\Honda\UsedCarController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('showroom')->group(function () {
    Route::get('/{bodymodel}', [HomeController::class, 'showroom'])->name('showroom');
    Route::get('/{bodymodel}/paket-promo/{modeltype}', [HomeController::class, 'paketpromo'])->name('paketpromo');
    Route::get('/{bodymodel}/paket-promo/penawaran/sales-{sales}/{modeltype}', [HomeController::class, 'penawaranpromo'])->name('penawaranpromo');
    Route::get('/{bodymodel}/{modelspec}/{modeltype}', [HomeController::class, 'modeldetail'])->name('modeldetail');
});
Route::controller(ServiceController::class)->group(function () {
    Route::get('/service', 'index')->name('service');
    Route::get('/service/booking', 'booking')->name('service.booking');
    Route::get('/sparepart', 'sparepart')->name('sparepart');
    Route::get('/body-paint', 'bodypaint')->name('bodypaint');
});
Route::get('/used-car', [UsedCarController::class, 'index'])->name('usedcar');
Route::get('/pricelist', [PricelistController::class, 'index'])->name('pricelist');
Route::get('/customer-care', [BioDataController::class, 'customercare'])->name('customercare');
Route::get('/gallery', [BioDataController::class, 'gallery'])->name('gallery');