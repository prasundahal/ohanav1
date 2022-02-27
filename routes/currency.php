<?php

use App\Http\Controllers\Admin\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/currency/list', function(){
    return 'Helo Muniraj';
});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin/currency/', 'as' => 'admin.currency.'], function(){
        Route::get('', [CurrencyController::class, 'index'])->name('index');
        Route::get('create', [CurrencyController::class, 'create'])->name('create');
        Route::post('store', [CurrencyController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CurrencyController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [CurrencyController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CurrencyController::class, 'delete'])->name('delete');
    }); 
});
