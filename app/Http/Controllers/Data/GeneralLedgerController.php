<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralLedgerController extends Controller
{
    public function showGeneralLedgerForm()
    {
        return view('data.general_ledger');
    }
    //
}
