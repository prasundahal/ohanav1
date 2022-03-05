<?php

use App\Http\Controllers\BuyController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'projectbuy/', 'as' => 'buyproject.'], function(){
    Route::post('store', [BuyController::class, 'store'])->name('store');
});