<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('index');
});

// Resource route for orders
Route::resource('orders', OrderController::class);

// Custom routes for order edit and update
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

// Another route for the welcome page (if needed)
Route::get('/welcome', function () {
    return view('welcome');
});
