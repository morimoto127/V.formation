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

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $recipes->image_path = basename($path);
        } 

        unset($form['_token']);
        unset($form['image']);

        $recipes->fill($form);
        $recipes->save();

        return redirect('user/recipes');
    }

    public function edit(Request $request)
    {
        $recipes = Recipes::find($request->id);
        if (empty($recipes)) {
            abort(404);
        }
        return view('user.recipes.edit', ['recipes_form' => $recipes]);
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            $posts = Recipes::where('title', $cond_title)->get();
        } else {
            $posts = Recipes::all();
        }
        return view('user.index' ,['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Recipes::$rules);
        $recipes = Recipes::find($request->id);
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
        $recipes = Recipes::find($request->id);

        // 削除する
        $recipes->delete();

        return redirect('user/recipes');
    }
}
