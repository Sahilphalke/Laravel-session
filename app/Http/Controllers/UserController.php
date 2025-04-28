<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        return redirect('/profile');
        // return "welcom";
    }

    function logout(Request $request)
    {
        session()->pull('name');
        return redirect('/profile');
    }
}


