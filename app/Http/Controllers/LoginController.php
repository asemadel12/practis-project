<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginValidation(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'min:6|required'
        ]);
        return redirect()->route('home'); //هون في حالة انه المعلومات صحيحة رح يروح على راوت هوم 
    }
}
