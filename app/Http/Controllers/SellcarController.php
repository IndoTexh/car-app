<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellcarController extends Controller
{
    public function index()
    {
        return view('sellcar');
    }
}
