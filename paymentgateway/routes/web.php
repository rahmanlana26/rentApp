<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\KomerceShippingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cek-progress', [HomeController::class, 'track'])->name('track.form');
Route::get('/checkout', [PaymentController::class, 'createInvoice']);
Route::get('/payment-success', function () {
    return 'Pembayaran berhasil diproses!';
});

Route::get('/komerce/cari-lokasi', [KomerceShippingController::class, 'searchDestination']);
Route::post('/komerce/cek-ongkir', [KomerceShippingController::class, 'calculateCost']);

Route::get('/ongkir-ui', function () {
    return view('checkout');
});