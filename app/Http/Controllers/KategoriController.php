<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\KategoriModel;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'kategori' => 'required'
        );
    }

    public function index()
    {
        $data = DB::table('tb_kategori')->get();
        return view('backend.kategori.index',compact('data'));
    }

    public function addkategori()
    {
        return view('backend.kategori.addkategori');
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Telah Diisi Dengan Benar.');
        }else{
            $input = new KategoriModel;
            $input->kategori = $r->kategori; 
            $input->save();

            return redirect('viewkategori')->with('pesan','Input Data Success');
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $del = DB::table('tb_kategori')->where('id_kategori',$id)->delete();
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
        $data = DB::table('tb_kategori')->where('id_kategori',$id)->first();
        return view('backend.kategori.editkategori',compact('data'));
    }

    public function update(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Terisi Dengan Benar.');
        }else{
            $up = DB::table('tb_kategori')->where('id_kategori',$r->id_kategori)->update([
                'descripsi' => $r->deskripsi
            ]);

            if($up == TRUE){
                return redirect('viewkategori')->with('pesan','Update Data Success');
            }else{
                return back()->with('validasi','Pastikan Format Terisi Dengan Benar.');
            }
        }
    }
}
