<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::get('wallets', 'WalletController@index')
        ->name('api.wallets');
    
    Route::get('wallets/{id}', 'WalletController@show')
        ->name('api.wallet.show');
    
    Route::get('wallets/{id}/transactions', 'WalletController@transactions')
        ->name('api.wallet.transactions');
    
    Route::get('fiat-wallets', 'FiatWalletController@index')
        ->name('api.fiat_wallets');
    
    Route::get('fiat-wallets/{id}', 'FiatWalletController@show')
        ->name('api.fiat_wallet.show');
});