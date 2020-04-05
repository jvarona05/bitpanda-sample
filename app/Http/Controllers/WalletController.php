<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WalletTransactionResource;
use App\Http\Resources\UserWalletResource;
use App\Http\Resources\WalletResource;
use App\Repository\WalletRepository;
use App\Wallet;

/**
 * @group Wallets
 */
class WalletController extends Controller
{
    /**
     * Get user wallets.
     * 
     * Returns the wallets gruped by wallets, commodity_wallets, fiat_wallets.
     *
     * @response { "data":{ "type":"collection", "attributes":{ "wallets":[ { "type":"wallet", "attributes":{ "name":"BTC Wallet", "balance":"4.00", "symbol":"BTC", "pending_transactions_count":0, "deleted":false }, "id":1 }, { "type":"wallet", "attributes":{ "name":"LTC Wallet", "balance":"3.00", "symbol":"LTC", "pending_transactions_count":0, "deleted":false }, "id":2 } ], "commodity_wallets":[ { "type":"wallet", "attributes":{ "name":"Gold Wallet", "balance":"3.00", "symbol":"XAU", "pending_transactions_count":0, "deleted":false }, "id":31 }, { "type":"wallet", "attributes":{ "name":"Silver Wallet", "balance":"8.00", "symbol":"XAG", "pending_transactions_count":0, "deleted":false }, "id":32 } ], "fiat_wallets":[ { "type":"fiat_wallet", "attributes":{ "name":"EUR Wallet", "balance":"2500.00", "fiat_id":1, "symbol":"EUR" }, "id":1 }, { "type":"fiat_wallet", "attributes":{ "name":"USD Wallet", "balance":"0.00", "fiat_id":2, "symbol":"USD" }, "id":2 } ] } } }
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return new UserWalletResource([
            'wallets' => WalletRepository::getUserCryptocoinWallets($user), 
            'commodity_wallets' => WalletRepository::getUserMetalWallets($user),
            'fiat_wallets' => WalletRepository::getUserFiatWallets($user)
        ]);
    }

    /**
     * Get wallet.
     * 
     * Returns the data of a single wallet.
     *
     * @urlParam id required The ID of the wallet.
     * @response { "data": { "type": "wallet", "attributes": { "name": "BTC Wallet", "balance": "4.00", "symbol": "BTC", "pending_transactions_count": 0, "deleted": false }, "id": 1 } }
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new WalletResource(Wallet::find($id));
    }

    /**
     * Get wallet transactions.
     * 
     * Returns all wallet's transactions.
     * 
     * @urlParam id required The ID of the wallet.
     * @response { "data":[ { "type":"wallet_transaction", "attributes":{ "action":"buy", "amount":"5.00", "date":"Sun Apr 05 2020 05:20:33 GMT+0000" }, "id":1 }, { "type":"wallet_transaction", "attributes":{ "action":"sell", "amount":"2.00", "date":"Sun Apr 05 2020 05:20:33 GMT+0000" }, "id":2 } ] }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transactions($id)
    {
        $transactions = Wallet::find($id)->transactions;

        return WalletTransactionResource::collection($transactions);
    }
}
