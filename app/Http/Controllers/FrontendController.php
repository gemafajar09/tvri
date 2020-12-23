<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data['slider'] = DB::table('tb_slider')->get();
        return view('frontend.home',$data);
    }
}
