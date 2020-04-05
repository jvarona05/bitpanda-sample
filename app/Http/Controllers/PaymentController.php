<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentOption;
use App\Http\Resources\PaymentOptionResource;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = PaymentOption::with(['fiatProviderDetails'])->get();

        return PaymentOptionResource::collection($payments);
    }
}
