<?php

namespace App\Http\Controllers;

use App\Models\ActiveEquipment;
use App\Models\Area;
use Illuminate\Http\Request;

class ActiveEquipmentController extends Controller
{
    public function index()
    {
        $equipos = ActiveEquipment::all();
        return view('equipment.index',compact('equipos'));
    }

    public function create()
    {
        $areas = Area::select('name','id')->get();

        return view('equipment.create',compact('areas'));
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'area_id' => 'required',
            'login_windows' => 'nullable',
            'equipo_host' => 'nullable',
            'usuario_asignado' => 'nullable',
            'tipo' => 'required',
            'modelo' => 'nullable',
            'marca' => 'nullable',
            'serie' => 'nullable',
            'nro_producto' => 'nullable',
            'ram' => 'nullable',
            'disco_duro' => 'nullable',
            'procesador' => 'nullable',
            'sistema_operativo' => 'nullable',
            'ip' => 'nullable',
            'mac' => 'nullable',
            'mon_marca' => 'nullable',
            'mon_serie' => 'nullable',
            'mon_modelo' => 'nullable',
            'mon_nro_producto' => 'nullable',
            'ext_marca' => 'nullable',
            'ext_serie' => 'nullable',
            'ext_modelo' => 'nullable',
            'ext_nro_producto' => 'nullable',
            'has_ups' => 'nullable'
        ]);

       $area=ActiveEquipment::create($storeData);

        if($area)
        {
            flash("Equipo Activos creada con Exito");
            return redirect('/activeequipment');
        }else{
            flash("Error al crear Equipo Activo");
            return redirect('/activeequipment');
        }

    }

    public function show(ActiveEquipment $activeEquipment, $id)
    {
        $activeEquipment = ActiveEquipment::findOrFail($id);

        return view('equipment.show',compact('activeEquipment'));
    }

    public function edit(ActiveEquipment $activeEquipment)
    {
        //
    }

    public function update(Request $request, ActiveEquipment $activeEquipment)
    {
        //
    }

    public function destroy(ActiveEquipment $activeEquipment)
    {
        //
    }
}
