<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WalletTransactionResource;
use App\Http\Resources\FiatWalletResource;
use App\Repository\WalletRepository;
use App\FiatWallet;

/**
 * @group Fiat Wallets
 */
class FiatWalletController extends Controller
{
    /**
     * Get user fiat wallets.
     * 
     * Returns the fiat wallets of a user.
     *
     * @response { "data": [ { "type": "fiat_wallet", "attributes": { "name": "EUR Wallet", "balance": "2500.00", "fiat_id": 1, "symbol": "EUR" }, "id": 1 }, { "type": "fiat_wallet", "attributes": { "name": "USD Wallet", "balance": "0.00", "fiat_id": 2, "symbol": "USD" }, "id": 2 } ] }
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiatWallets = WalletRepository::getUserFiatWallets(auth()->user());

        return FiatWalletResource::collection($fiatWallets);
    }

    /**
     * Get fiat wallet.
     * 
     * Returns the data of a single fiat wallet.
     *
     * @urlParam id required The ID of the fiat wallet.
     * @response { "data": { "type": "fiat_wallet", "attributes": { "name": "EUR Wallet", "balance": "2500.00", "fiat_id": 1, "symbol": "EUR" }, "id": 1 } }
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new FiatWalletResource(FiatWallet::find($id));
    }

    /**
     * Get fiat wallet transactions.
     * 
     * Returns all transactions of a fiat wallet.
     * 
     * @urlParam id required The ID of the wallet.
     * @response { "data": [ { "type": "wallet_transaction", "attributes": { "action": "deposit", "amount": "3000.00", "date": "Sun Apr 05 2020 05:20:35 GMT+0000" }, "id": 187 }, { "type": "wallet_transaction", "attributes": { "action": "withdrawal", "amount": "500.00", "date": "Sun Apr 05 2020 05:20:35 GMT+0000" }, "id": 188 } ] }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transactions($id)
    {
        $transactions = FiatWallet::find($id)->transactions;

        return WalletTransactionResource::collection($transactions);
    }
}
