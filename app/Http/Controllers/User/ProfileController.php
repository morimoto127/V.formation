<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('user.index',  ['user_form' => $user]);
    }


    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('user.profile', ['user_form' => $user]);
    }

    public function update(Request $request)
    {
        // User Modelからデータを取得する
        $user = User::find($request->id);
        //送信されてきたフォームデーターを格納する
        $user_form = $request->all();
        unset($user_form['_token']);
        //該当するデータを上書き保存する
        $user->fill($user_form)->save();
        return redirect('user/recipes');
    }
}

    
