<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        //dd($areas);
        return view('areas.index',compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255|unique:areas,name',
        ]);

       $area=Area::create($storeData);

        if($area)
        {
            flash("Area creada con Exito");
            return redirect('/area');
        }else{
            flash("Error al crear Area");
            return redirect('/area');
        }


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
        $updateData = $request->validate([
            'name' => 'required|max:255|unique:areas,name',
        ]);

        $area= Area::whereId($request->area_id)->update($updateData);

        if($area)
        {
            flash("Area Actualizada con Exito");
            return redirect('/area');
        }else{
            flash("Error al actualizar Area");
            return redirect('/area');
        }
    }

    public function destroy(Area $area)
    {
        //dd($area);

        if($area->status == 'A'){
            $area = Area::findOrFail($area->id);
            $area->status = 'I';
            $area->save();
            flash("Area Inhabilitada con Éxito");
        }
        else{
            $area = Area::findOrFail($area->id);
            $area->status = 'A';
            $area->save();
            flash("Area Habilitada con Éxito");
        }

        return redirect()->back();
    }

    public function fillTable(){

        return datatables()
        ->eloquent(Area::query())
        ->addColumn('areabtn','actions.areabtn')
        ->addColumn('areabadge',function($area){
            if($area->status == 'A'){
                return '<span class="badge badge-pill badge-success p-2">Activo</span>';
            }
            else{
                return '<span class="badge badge-pill badge-danger p-2">Inactivo</span>';
            }
        })
        ->rawColumns(['areabtn','areabadge'])
        ->toJson();
    }
}
