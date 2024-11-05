<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $nickname = $user->nickname;
        }
        return view('user.recipes',  ['user_form' => $user]);
    }


    public function edit(Request $request)
    {

        return view('user/profile/edit');
    }
}

    
