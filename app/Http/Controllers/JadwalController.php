<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\JadwalModel;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'jam' => 'required|regex:/(^[0-9 ]+$)+/'
        );
    }

    public function index()
    {
        $data['bulan'] = DB::table('tb_jadwal')->select('filter')->groupby('filter')->get();
        return view('backend.jadwal.index',$data);
    }

    public function addschedule()
    {

        return view('backend.jadwal.addjadwal');
    }

    public function save(Request $r)
    {   $tanggal = explode("-",$r->tanggal);
        $tahun = $tanggal[0];
        $bulan = $tanggal[1];
        $filter = $tahun."-".$bulan;
        foreach($r->jam as $i =>$a)
        {
            $input = new JadwalModel;
            $input->tanggal = $r->tanggal;
            $input->jam = $r->jam[$i]; 
            $input->nama_acara = $r->program[$i];
            $input->filter = $filter;
            $input->save();
        }
        return redirect('schedule')->with('pesan','Input Data Success');
    }

    public function detailbulan($id)
    {
        $filter = decrypt($id);
        $data['detail'] = DB::table('tb_jadwal')->where('filter', $filter)->groupBy('tanggal')->select('tanggal')->get();
        return view('backend.jadwal.detailbulan',$data);
    }

    public function detailhari($haris)
    {
        $hari = decrypt($haris);
        $data['hari'] = DB::table('tb_jadwal')->where('tanggal', $hari)->get();
        return view('backend.jadwal.detailhari',$data);
    }

    // frontend
    public function showjadwal()
    {
        $bulan = date('Y-m');
        $data['show'] = DB::table('tb_jadwal')->where('filter',$bulan)->groupBy('tanggal')->get();
        return view('frontend.detailjadwal.index',$data);
    }

    public function searchjadwal(Request $r)
    {
        if($r->bulan == NULL)
        {
            $bulan = date('Y-m');
        }else{
            $bulan = $r->bulan;
        }
        $data['show'] = DB::table('tb_jadwal')->where('filter',$bulan)->groupBy('tanggal')->get();
        return view('frontend.detailjadwal.index',$data);
    }

}
