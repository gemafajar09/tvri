<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SosialController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_mediasoal')->get();
        return view('backend.sosialmedia.index',compact('data'));
    }
}
