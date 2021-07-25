<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datum;

class JournalController extends Controller
{
    public function showJournalsForm()
    {
        return view('data.journals');
    }
    //
}
