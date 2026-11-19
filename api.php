<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedemptionController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\ReportController;
Route::post('/redemptions', [RedemptionController::class, 'store']);

Route::get('/users/{id}/balance', [BalanceController::class, 'show']);

Route::get(
    '/reports/redemptions',
    [ReportController::class, 'redemptions']
);
