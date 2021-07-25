<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlController extends Controller
{
    public function showPlForm()
    {
        return view('data.pl');
    }
    //
}
