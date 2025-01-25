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
    public function listMaker()
    {
        return view('admin.maker-list', [
            'makers' => Maker::orderBy('desc')->paginate(10)
        ]);
    }
    public function editMaker(Maker $maker)
    {
        return view('admin.edit-maker', [
            'maker' => $maker
        ]);
    }
    public function updateMaker(Maker $maker, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $maker->name = $request->name;
        $maker->save();
        return redirect()->route('admin.listMaker')
            ->with('update-message', 'Car maker with id ' . $maker->id . ' has been updated.');
    }
    public function deleteMaker(Maker $maker)
    {
        $maker->delete();
        return back()->with('update-message', 'Car maker with id ' . $maker->id . ' has been deleted.');
    }
    public function listModel()
    {
        return view('admin.model-list', [
            'models' => Models::orderBy('desc')->with('maker')->paginate(10)
        ]);
    }
    public function editModel(Models $models)
    {
        return view('admin.edit-model', [
            'model' => $models,
            'makers' => Maker::all()
        ]);
    }
    public function updateModel(Models $models, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'maker' => 'required|max:255'
        ]);
        $models->update([
            'maker_id' => $request->maker,
            'name' => $request->name
        ]);
        $models->save();
        return redirect()->route('admin.modelList')
            ->with('update-message', 'Car model with id ' . $models->id . ' has been updated.');
    }
    public function deleteModel(Models $models)
    {
        $models->delete();
        return back()->with('update-message', 'Car model with id ' . $models->id . ' has been deleted.');
    }
    public function listType()
    {
        return view('admin.type-list', [
            'types' => Type::all()
        ]);
    }
    public function editType(Type $type)
    {
        return view('admin.edit-type', [
            'type' => $type
        ]);
    }
    public function updateType(Type $type, Request $request)
    {
        $request->validate(['type' => 'required|:max:255']);

        $type->update(['type' => $request->type]);

        $type->save();

        return redirect()->route('admin.listType')->with('update-message', 'Car type with id ' . $type->id . ' has been updated.');
    }
    public function deleteType(Type $type)
    {
        $type->delete();
        return back()->with('update-message', 'Car type with id ' . $type->id . ' has been deleted.');
    }
    public function listFuel()
    {
        return view('admin.fuel-list', ['fuels' => Fuel::all()]);
    }
    public function editFuel(Fuel $fuel)
    {
        return view('admin.edit-fuel', ['fuel' => $fuel]);
    }
    public function updateFuel(Fuel $fuel, Request $request) 
    {
        $request->validate([
            'fuel' => 'required|max:255'
        ]);
        $fuel->update([
            'fuel' => $request->fuel
        ]);
        $fuel->save();
        return redirect()->route('admin.listFuel')->with('update-message', 'Fuel type with id ' . $fuel->id . ' has been updated.');
    }
    public function deleteFuel(Fuel $fuel)
    {
        $fuel->delete();
        return back()->with('update-message', 'Fuel type with id ' . $fuel->id . ' has been deleted.');
    }
}
