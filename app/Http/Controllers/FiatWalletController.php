<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WalletTransactionResource;
use App\Http\Resources\FiatWalletResource;
use App\Repository\WalletRepository;
use App\FiatWallet;

class FiatWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiatWallets = WalletRepository::getUserFiatWallets(auth()->user());

        return FiatWalletResource::collection($fiatWallets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new FiatWalletResource(FiatWallet::find($id));
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
