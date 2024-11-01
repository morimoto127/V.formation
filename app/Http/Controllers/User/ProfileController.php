<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {

        return view('user.profile.edit');
    }
}

    
