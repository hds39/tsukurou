<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistedDataController extends Controller
{
    public function showDataForm()
    {
        return view('data');
    }
}
