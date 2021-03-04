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

    public function statistik()
    {
        $sekarang = date('Y-m-d');
        $kemarin = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));
        $data1 = DB::table('tb_statistik')->select(DB::raw('COUNT(*) as sekarang'))->where('tanggal',$sekarang)->first();
        $data2 = DB::table('tb_statistik')->select(DB::raw('COUNT(*) as kemarin'))->where('tanggal',$kemarin)->first();
        $data = array(
            'sekarang' => $data1->sekarang,
            'kemarin' => $data2->kemarin
        );
        echo json_encode($data);
    }
}
