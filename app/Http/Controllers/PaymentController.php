<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentOption;
use App\Http\Resources\PaymentOptionResource;

/**
 * @group Payments
 */
class PaymentController extends Controller
{
     /**
     * Get payment options
     * 
     * Returns the payment options and the fiat provider details.
     *
     * @response { "data":[ { "type":"payment_option", "attributes":{ "short_name":"sofort", "name":"Sofort", "description":"Online bank transfer for users from Europe. The payment is processed immediately.", "terms":"I hereby confirm that the bank account is in my name.", "fiat_provider_details":[ { "type":"fiat_provider_detail", "attributes":{ "fee_fix":"0.00", "fee_percent":"1.99", "fee_max":"0.00", "fiat_id":1, "vip_fee_percent_difference":"0.000", "savings_enabled":0 }, "id":1 }, { "type":"fiat_provider_detail", "attributes":{ "fee_fix":"0.00", "fee_percent":"1.99", "fee_max":"0.00", "fiat_id":3, "vip_fee_percent_difference":"0.000", "savings_enabled":0 }, "id":2 } ], "unavailable":0, "is_voucher":0, "is_instant":0, "enabled":0, "savings_enabled":0 }, "id":1 } ] }
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = PaymentOption::with(['fiatProviderDetails'])->get();

        return PaymentOptionResource::collection($payments);
    }
}
