<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function front()
    {
       // idの降順（idが大きい方から）６件を取得する;
       $recipes = Recipe::orderBy('id','desc')->take(6)->get(); 
        return view('front', ['recipes' => $recipes]);
    }

    public function index(Request $request)
    {
        $recipes = Recipe::all();
        return view('index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipe', ['recipe' => $recipe]);
    }
}
