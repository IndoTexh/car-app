<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Models\Maker;
use App\Models\Models;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin', [
            'makers' => Maker::all()
        ]);
    }
    public function createMaker(Request $request)
    {
        $name = $request->validate([
            'name' => 'required|max:255|string'
        ]);
        Maker::create($name);
        return back()->with('maker-message', 'A new car maker has been created!');
    }
    public function createModel(Request $request)
    {
        $models = $request->validate([
            'maker' => 'required',
            'model' => 'required|max:255|string'
        ]);
        Models::create([
            'maker_id' => $models['maker'],
            'name' => $models['model']
        ]);
        return back()->with('model-message', 'A new model has been created!');
    }
    public function createType(Request $request)
    {
        $type = $request->validate([
            'type' => 'required|string|max:255'
        ]);
        Type::create($type);
        return back()->with('type-message', 'A new car type has been created!');
    }
    public function createFuel(Request $request)
    {
        $fuel = $request->validate([
            'fuel' => 'required|string|max:255'
        ]);
        Fuel::create($fuel);
        return back()->with('fuel-message', 'A new type fuel has been created!');
    }
}
