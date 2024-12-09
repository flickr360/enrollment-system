<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function index()
    {
        // Fetch the balance and recent transactions
        $balance = 0; // For demo, you can fetch this from the database or auth user
        $transactions = Transaction::latest()->take(5)->get(); // Fetching latest transactions

        return view('payment', compact('balance', 'transactions'));
    }
}
