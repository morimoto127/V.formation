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

        return view('user/profile/edit');
    }
}

    
