<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        if (Data::all()) {
            $data = Data::all();
            return $data->name;
        }
        return view('top');
    }
}
