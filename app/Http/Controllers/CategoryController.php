<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255|unique:categories,name',
        ]);

       $area=Category::create($storeData);

        if($area)
        {
            flash("Categoría creada con Exito");
            return redirect('/category');
        }else{
            flash("Error al crear Categoría");
            return redirect('/category');
        }
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //dd($request);

        $updateData = $request->validate([
            'name' => 'required|max:255|unique:areas,name',
        ]);

        $category= Category::whereId($request->category_id)->update($updateData);

        if($category)
        {
            flash("Categoria Actualizada con Exito");
            return redirect('/category');
        }else{
            flash("Error al actualizar Categoria");
            return redirect('/category');
        }
    }

    public function destroy(Category $category)
    {
        //dd($category);
        if($category->status == 'A'){
            $category = Category::findOrFail($category->id);
            $category->status = 'I';
            $category->save();
            flash("Categoria Inhabilitada con Éxito");
        }
        else{
            $category = Category::findOrFail($category->id);
            $category->status = 'A';
            $category->save();
            flash("Categoria Habilitada con Éxito");
        }

        return redirect()->back();
    }
}
