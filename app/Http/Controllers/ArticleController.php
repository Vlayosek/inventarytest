<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('article.index',compact('articles'));
    }
    public function create()
    {
        $areas = Area::select('name','id')->get();

        //return $areas;

        return view('article.create',compact('areas'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
        //
    }


    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
