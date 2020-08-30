<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the customers dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function customers()
    {
        return view('customers');
    }

    /**
     * Show the customer detail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function customer(Customer $customer)
    {
        return view('customer');
    }

    /**
     * Show the transactions dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function transactions()
    {
        return view('transactions');
    }

    /**
     * Show the transaction detail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function transaction(Transaction $transaction)
    {
        return view('transaction');
    }
}
