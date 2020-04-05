<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WalletTransactionResource;
use App\Http\Resources\UserWalletResource;
use App\Http\Resources\WalletResource;
use App\Repository\WalletRepository;
use App\Wallet;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new WalletResource(Wallet::find($id));
    }

    /**
     * Display the specified resource.
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
