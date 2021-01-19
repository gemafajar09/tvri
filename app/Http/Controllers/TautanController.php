<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TautanController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_tautan')->get();
        return view('backend.tautan.index',compact('data'));
    }

    public function save(Request $r)
    {
        $id_tautan = $r->id_tautan;
        $nama = $r->nama;
        $link = $r->link;
        if($id_tautan != '')
        {
            $up = DB::table('tb_tautan')->where('id_tautan',$r->id_tautan)->update(['nama_tautan' => $nama, 'link_tautan' => $link]);
            if($up == TRUE){
                return back()->with('pesan','Update Data Success');
            }else{
                return back()->with('error','Pastikan Format Dengan Benar.');
            }
        }else{
            $up = DB::table('tb_tautan')->insert(['nama_tautan' => $nama, 'link_tautan' => $link]);
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
        $del = DB::table('tb_tautan')->where('id_tautan',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

}
