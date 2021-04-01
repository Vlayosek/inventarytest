<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        //dd($sectors);
        return view('sector.index',compact('sectors'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255|unique:categories,name',
        ]);

       $area=Sector::create($storeData);

        if($area)
        {
            flash("Sector creado con Exito");
            return redirect('/sector');
        }else{
            flash("Error al crear Sector");
            return redirect('/sector');
        }
    }

    public function show(Sector $sector)
    {
        //
    }

    public function edit(Sector $sector)
    {
        //
    }
    public function update(Request $request, Sector $sector)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255|unique:sectors,name',
        ]);

        $sector= Sector::whereId($request->sector_id)->update($updateData);

        if($sector)
        {
            flash("Sector Actualizado con Exito");
            return redirect('/sector');
        }else{
            flash("Error al actualizar Sector");
            return redirect('/sector');
        }
    }

    public function destroy(Sector $sector)
    {
        //dd($sector);
        if($sector->status == 'A'){
            $sector = Sector::findOrFail($sector->id);
            $sector->status = 'I';
            $sector->save();
            flash("Sector Inhabilitada con Éxito");
        }
        else{
            $sector = Sector::findOrFail($sector->id);
            $sector->status = 'A';
            $sector->save();
            flash("Sector Habilitada con Éxito");
        }

        return redirect()->back();
    }
}
