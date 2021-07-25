<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BsController extends Controller
{
    public function showBsForm()
    {
        return view('data.bs');
    }
    //
}
