<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\IncomesController;

Route::get('/sales', [SalesController::class, 'index']);
Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/stocks', [StocksController::class, 'index']);
Route::get('/incomes', [IncomesController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
