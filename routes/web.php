<?php

use App\Http\Controllers\HBL\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('/payment', [PaymentController::class, 'index'])->name('hbl.payment.index');
Route::post('/payment/checkout', [PaymentController::class, 'checkout'])->name('hbl.payment.checkout');
Route::post('/payment', [PaymentController::class, 'store'])->name('hbl.payment.store');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('hbl.payment.success');
Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('hbl.payment.failed');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('hbl.payment.cancel');
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('hbl.payment.callback');