<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\ArtikelModel;
use DB;
use File;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'image' => 'mimes:jpeg,jpg,png|max:50000'
        );
    }

    public function index()
    {
        $data = DB::table('tb_artikel')->get();
        return view('backend.artikel.index',compact('data'));
    }

    public function addartikel()
    {
        return view('backend.artikel.addartikel');
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Gambar Dengan Benar.');
        }else{
            $filename = $r->image->getClientOriginalName();
            $r->file('image')->move('artikel',$r->image->getClientOriginalName());
            // simpan
            $input = new ArtikelModel;
            $input->tanggal_artikel = date("Y-m-d");
            $input->judul = $r->judul; 
            $input->foto = $filename;
            $input->descripsi = $r->deskripsi;
            $input->save();

            return redirect('viewartikel')->with('pesan','Input Data Success');
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_artikel')->where('id_artikel',$id)->first();
        File::delete('artikel/'.$cek->foto);
        $del = DB::table('tb_artikel')->where('id_artikel',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

    public function getdata($ids)
    {
        $id = decrypt($ids);
        $data = DB::table('tb_artikel')->where('id_artikel',$id)->first();
        return view('backend.artikel.editartikel',compact('data'));
    }

    public function update(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Image Dengan Benar.');
        }else{
            if($r->file('image') == NULL)
            {
                $up = DB::table('tb_artikel')->where('id_artikel',$r->id_artikel)->update([
                    'descripsi' => $r->deskripsi
                ]);
            }else{
                $filename = $r->image->getClientOriginalName();
                $r->file('image')->move('artikel',$r->image->getClientOriginalName());
                $up = DB::tbale('tb_artikel')->where('id_artikel',$r->id_artikel)->update([
                    'judul_artikel' => $r->judul, 'foto' => $filename, 'descripsi' => $r->deskripsi]);
            }

            if($up == TRUE){
                return redirect('viewartikel')->with('pesan','Update Data Success');
            }else{
                return back()->with('validasi','Pastikan Format Image Dengan Benar.');
            }
        }
    }
}
