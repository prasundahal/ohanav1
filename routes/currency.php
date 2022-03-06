<?php

use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\API\CurrencyController as APICurrencyController;
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
        Route::get('api-currency-list', [CurrencyController::class, 'apiCurrency'])->name('getApiCurrency');
        // Route::get('base-currency', [CurrencyController::class, 'base_currency'])->name('base_currency');
        Route::post('store-or-update-base-currency', [CurrencyController::class, 'updateOrCreate'])->name('updateOrCreate');
    }); 

    Route::group(['prefix' => 'customers/', 'as' => 'admin.customer.'], function(){
        Route::get('lists', [CustomerController::class, 'index'])->name('lists');
        Route::delete('delete/{id}', [CustomerController::class, 'delete'])->name('delete');
    });
});

Route::get('api-currency', [APICurrencyController::class, 'saveCurrency'])->name('apisavecurrency');
