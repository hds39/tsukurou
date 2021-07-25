<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datum;

class RegisteredDataController extends Controller
{
    public function showDataForm(Datum $data)
    {
        return view('data',['data' => $data]);
    }
}
