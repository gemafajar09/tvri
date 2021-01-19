<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;
use DB;

class GaleryController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'foto' => 'mimes:jpeg,jpg,png|max:50000'
        );
    }
    
    public function index()
    {
        $data['gallery'] = DB::table('tb_gallery')->get();
        return view('backend.galery.index',$data);
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Dengan Benar.');
        }else{
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('gallery',$r->foto->getClientOriginalName());
            // simpan
            DB::table('tb_gallery')->insert(['foto' => $filename]);

            return back()->with('pesan','Input Data Success');
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_gallery')->where('id_gallery',$id)->first();
        File::delete('gallery/'.$cek->foto);
        $del = DB::table('tb_gallery')->where('id_gallery',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

    // frontend

    public function gallery()
    {
        $data['gallery'] = DB::table('tb_gallery')->get();
        return view('frontend.gallery.index',$data);
    }

}
