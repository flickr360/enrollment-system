<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
Route::resource('orders', OrderController::class);
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

Route::get('/', function () {
    return view('welcome');
});
