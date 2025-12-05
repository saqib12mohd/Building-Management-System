<?php

use App\Http\Controllers\TransactionPrintController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/transactions/{transaction}/print', [TransactionPrintController::class, 'print'])
    ->name('transactions.print');

