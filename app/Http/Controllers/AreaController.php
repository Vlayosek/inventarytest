<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view ('areas.index',compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $area = Area::create($storeData);

        return redirect('/area')->with('success', 'Area creada con Éxito!');
    }

    public function show(Area $area)
    {
        //
    }

    public function edit(Area $area)
    {
        $area = Area::findOrFail($area->id);
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        dd($request);
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        Area::whereId($id)->update($updateData);
        return redirect('/students')->with('completed', 'Student has been updated');
    }

    public function destroy(Area $area)
    {
        $area = Area::findOrFail($area->id);
        $area->status = 'I';

        $area->save();

        return redirect('/area')->with('sucess','Area anulada completamente');
    }
}
