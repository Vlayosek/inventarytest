<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
/* use App\Models\Role; */

class RolController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        //dd($roles);
        return view('roles.index',compact('roles'));

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255|unique:roles,name',
        ]);

       $rol=Role::create($storeData);

        if($rol)
        {
            flash("Rol creado con Exito");
            return redirect('/rol');
        }else{
            flash("Error al crear Rol");
            return redirect('/rol');
        }

    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        $updateRole = $request->validate([
            'name' => 'required|max:255|unique:roles,name',
        ]);

        $rol= Role::whereId($request->rol_id)->update($updateRole);

        if($rol)
        {
            flash("Rol Actualizado con Exito");
            return redirect('/rol');
        }else{
            flash("Error al actualizar Rol");
            return redirect('/rol');
        }
    }

    public function destroy(Request $request, Role $role)
    {

        $rol= Role::whereId($request->rol_id)->delete();

        if($rol){
            flash("Rol Eliminado con Exito");
            return redirect()->back();
        }
        else{
            flash("Problemas al eliminar rol");
            return redirect()->back();
        }



    }
}
