<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Models\Maker;
use App\Models\Models;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'makers' => Maker::all(),
            'models' => Models::all(),
            'types' => Type::all(),
            'fuels' => Fuel::all() 
        ]);
    }
}
