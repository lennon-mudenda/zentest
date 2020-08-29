<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Middleware\JVZIPNCVerify;
use App\Models\Customer;
use App\Models\Transaction;

class JVZIPNAPIController extends Controller
{
    public function __construct()
    {
        $this->middleware([JVZIPNCVerify::class]);
    }

    public function handler()
    {
        $email = \request()->input('ccustemail');
        $state = \request()->input('ccuststate');
        $country = \request()->input('ccustcc');
        $name = \request()->input('ccustname');
        $customer = Customer::get_user($email, $name, $state, $country);
        $transaction_input = \request()->only(['cproditem', 'cprodtitle', 'cprodtype', 'ctransaction', 'ctransaffiliate',
                                                'ctransamount', 'ctranspaymentmethod', 'ctransvendor', 'ctransreceipt',
                                                'cupsellreceipt', 'caffitid', 'cvendthru', 'cverify', 'ctranstime'
        ]);
        $transaction_input['customer_id'] = $customer->id;
        $transaction = Transaction::create($transaction_input);
        $transaction->customer;

        return response()->json([
            'success' => true,
            'transaction' => $transaction
        ], 200);
    }
}
