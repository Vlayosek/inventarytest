<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Contracts\DataTable;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users',$users);
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $storeData['name'],
            'email' => $storeData['email'],
            'password' => bcrypt($storeData['password']),
        ]);

        if($user)
        {
            flash("Usuario creado con Exito");
            return redirect('/user');
        }else{
            flash("Error al crear Usuario");
            return back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //dd($request);
        $updateData = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|unique:users,email',
        ]);

        //dd($updateData);

        $user= User::whereId($user->id)->update([
            'name' => $updateData['name'],
            'email' => $updateData['email'],
        ]);

        if($user)
        {
            flash("Usuario Actualizado con Exito");
            return redirect('/user');
        }else{
            flash("Error al Actualizar Usuario");
            return back();
        }
    }

    public function destroy(Request $request, User $user)
    {
        //dd($user);

        $user = User::findOrFail($user->id);

        if($user->status == 'A'){
            $user->status = 'I';
            $user->save();
            flash("Usuario Inhabilitado con Éxito");
        }
        else{

            $user->status = 'A';
            $user->save();
            flash("Usuario Habilitada con Éxito");
        }

        return redirect()->back();
    }

    public function fillTable(){
        return datatables()
        ->eloquent(User::query())
        ->addColumn('btn','actions')
        ->rawColumns(['btn'])
        ->toJson();
    }

}
