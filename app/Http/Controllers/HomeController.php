<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (session()->has('id_user') == TRUE) 
        {
            return view('backend.home');
        }
        else
        {
            return view ("backend.login.index");
        }
    }
}
