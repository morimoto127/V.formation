<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;


class RecipesController extends Controller
{
    public function add()
    {
        return view('user.recipes.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Recipe::$rules);

        $recipes = new Recipe;
        $form = $request->all();
    
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $recipes->image_path = basename($path);
        } else {
            $recipes->image_path ="noimage.png"; 
        } 
         

        unset($form['_token']);
        unset($form['image']);

        $recipes->fill($form);
        $recipes->user_id = \Auth::id();
        $recipes->save();

        return redirect('user/recipes');
    }

    public function edit(Request $request)
    {
        $recipes = Recipe::find($request->id);
        if (empty($recipes)) {
            abort(404);
        }
        return view('user.recipes.edit', ['recipes_form' => $recipes]);
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            $recipes = Recipe::where('title', $cond_title)->get();
        } else {
            $recipes = Recipe::all();
        }
        $user_form = Auth::user();
        return view('user.index' ,['recipes' => $recipes, 'cond_title' => $cond_title, 'user_form' => $user_form]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Recipe::$rules);
        $recipes = Recipe::find($request->id);
        $recipes_form = $request->all();

        if ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $recipes_form['image_path'] = basename($path);
        } else {
            $recipes_form['image_path'] = $recipes->image_path;
        }

        unset($recipes_form['image']);
        unset($recipes_form['_token']);

        // 該当するデータを上書きして保存する
        $recipes->fill($recipes_form)->save();

        return redirect('user/recipes');
    }

    public function delete(Request $request)
    {
        $recipes = Recipe::find($request->id);

        // 削除する
        $recipes->delete();

        return redirect('user/recipes');
    }
}
