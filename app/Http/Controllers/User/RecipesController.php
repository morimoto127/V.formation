<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function add()
    {
        return view('user.recipes.create');
    }
    public function edit()
    {
        return view('user.recipes.edit');
    }
    public function index()
    {
        return view('user.index');
    }
}
