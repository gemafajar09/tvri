<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $tanggal = date('Y-m-d');
        $data['slider'] = DB::table('tb_slider')->get();
        $data['link'] = DB::table('tb_link')->first();
        $data['news'] = DB::table('tb_news')->get();
        $data['programacara'] = DB::table('tb_artikel')->get();
        $data['jadwal'] = DB::table('tb_jadwal')->where('tanggal',$tanggal)->get();
        $data['kategori'] = DB::table('tb_kategori')->get();
        return view('frontend.home',$data);
    }
}
