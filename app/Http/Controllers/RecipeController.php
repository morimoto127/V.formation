<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function front()
    {
       // dd("ここが動いた");
        return view('front');
    }
}
