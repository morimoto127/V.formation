<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function front()
    {
       // dd("ここが動いた");
       $recipes = Recipe::all();
        return view('front', ['recipes' => $recipes]);
    }
}
