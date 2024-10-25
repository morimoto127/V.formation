<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipes;


class RecipesController extends Controller
{
    public function add()
    {
        return view('user.recipes.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Recipes::$rules);

        $recipes = new Recipes;
        $form = $request->all();

        unset($form['_token']);
        unset($form['image']);

        $recipes->fill($form);
        $recipes->save();

        return redirect('user/recipes/create');
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
