<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transcation;

class TransactionPrintController extends Controller
{

     public function print(Transcation $transaction)
    {
        return view('print.transaction', [
            'contract' => $transaction,
        ]);
    }

}
