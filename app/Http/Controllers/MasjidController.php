<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MasjidModel;
use DB;

class MasjidController extends Controller
{


    // https://api.banghasan.com/sholat/format/json/kota/nama/aceh
    // https://api.banghasan.com/sholat/format/json/jadwal/kota/703/tanggal/2017-02-07

    // frontend
    public function infomasjid()
    {
        $tanggal = date('Y-m-d');
        $response = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/514/tanggal/'.$tanggal);
        $tmp_jadwal = $response->json();
        $data_jadwal = $tmp_jadwal['jadwal']['data'];
        // dd($data_jadwal);
        // dd($response->json());
        $data = DB::table('tb_kas_masjid')
        ->where('jenis_kas','=', 'Pemasukan')
        ->orderBy('id_kas_masjid', 'DESC')
        ->limit('5')
        ->get();

        $total_saldo = DB::table('tb_kas_masjid')
                            ->select(DB::raw('(SUM(pemasukan) - SUM(pengeluaran)) as total'))
                            ->first();
        return view('frontend.mosque.index',compact('data_jadwal','data', 'total_saldo'));
    }
    
    public function infodetailmasjid()
    {
        $data = DB::table('tb_kas_masjid')->get();

        $total_saldo = DB::table('tb_kas_masjid')
                            ->select(DB::raw('(SUM(pemasukan) - SUM(pengeluaran)) as total'))
                            ->first();

        return view('frontend.mosque.detail',compact('data', 'total_saldo'));
    }

    // backend
    public function index()
    {
        $data = DB::table('tb_kas_masjid')->get();
        return view('backend.infaqmasjid.index',compact('data'));
    }
    

    // public function addslider()
    // {
    //     return view('backend.slider.addslider');
    // }

    public function save(Request $r)
    {
        $id_kas_masjid = $r->id_kas_masjid;
        $tgl_kas = $r->tgl_kas;
        $jenis_kas = $r->jenis_kas;
        $keterangan = $r->keterangan;
        $pemasukan = $r->jumlah;
        $pengeluaran = $r->jumlah;
        if($id_kas_masjid != '')
        {
            if($jenis_kas == 'Pemasukan'){
                $up = DB::table('tb_kas_masjid')
                        ->where('id_kas_masjid',$r->id_kas_masjid)
                        ->update([
                            'tgl_kas' => $tgl_kas,
                            'jenis_kas' => $jenis_kas,
                            'keterangan' => $keterangan,
                            'pemasukan' => $pemasukan
                        ]);
            }else{
                $up = DB::table('tb_kas_masjid')
                        ->where('id_kas_masjid',$r->id_kas_masjid)
                        ->update([
                            'tgl_kas' => $tgl_kas,
                            'jenis_kas' => $jenis_kas,
                            'keterangan' => $keterangan,
                            'pengeluaran' => $pengeluaran
                        ]);
            }
            if($up == TRUE){
                return back()->with('pesan','Update Data Success');
            }else{
                return back()->with('error','Pastikan Format Dengan Benar.');
            }
        }else{
            if($jenis_kas == 'Pemasukan'){
                $up = DB::table('tb_kas_masjid')
                        ->insert([
                            'tgl_kas' => $tgl_kas,
                            'jenis_kas' => $jenis_kas,
                            'keterangan' => $keterangan,
                            'pemasukan' => $pemasukan
                        ]);
            }else{
                $up = DB::table('tb_kas_masjid')
                        ->insert([
                            'tgl_kas' => $tgl_kas,
                            'jenis_kas' => $jenis_kas,
                            'keterangan' => $keterangan,
                            'pengeluaran' => $pengeluaran
                        ]);
            }
            if($up == TRUE){
                return back()->with('pesan','Simpan Data Success');
            }else{
                return back()->with('error','Pastikan Format Dengan Benar.');
            }
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $del = DB::table('tb_kas_masjid')->where('id_kas_masjid',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

}
