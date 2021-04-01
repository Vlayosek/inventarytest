<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $areas = Area::count();
        $users = User::all()->count();
        $categories = Category::all()->count();
        $products = Product::all()->count();

        return view('home',compact('areas','users','categories','products'));
    }

    public function profile(){
        return view ('user.profile');
    }
}
