<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use File;

class RateController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'image' => 'mimes:jpeg,jpg,png|max:50000'
        );
    }

    public function index()
    {
        $data = DB::table('tb_ratecard')->get();
        return view('backend.rate.index',compact('data'));
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Image Dengan Benar.');
        }else{
            if($r->id_rate == '')
            {
                $filename = $r->image->getClientOriginalName();
                $r->file('image')->move('rate',$r->image->getClientOriginalName());
                // simpan
                DB::table('tb_ratecard')->insert(['kategori_rate' => $r->kategori_rate,'image_rate' => $filename, 'deskripsi_rate' => $r->deskripsi_rate]);

                return back()->with('pesan','Input Data Success');
            }else{
                if($r->file('image') == NULL)
                {
                    $up = DB::table('tb_ratecard')->where('id_rate',$r->id_rate)->update([
                        'kategori_rate' => $r->kategori_rate, 
                        'deskripsi_rate' => $r->deskripsi_rate
                    ]);
                }else{
                    $filename = $r->image->getClientOriginalName();
                    $r->file('image')->move('rate',$r->image->getClientOriginalName());
                    $up = DB::tbale('tb_ratecard')->where('id_rate',$r->id_rate)->update([
                        'kategori_rate' => $r->kategori_rate, 'image_rate' => $filename, 'deskripsi_rate' => $r->deskripsi_rate]);
                }
                if($up == TRUE){
                    return back()->with('pesan','Update Data Success');
                }else{
                    return back()->with('error','Pastikan Format Image Dengan Benar.');
                }
            }
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_ratecard')->where('id_rate',$id)->first();
        File::delete('rate/'.$cek->image_rate);
        $del = DB::table('tb_ratecard')->where('id_rate',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

    // frontend
    public function program()
    {
        $data = DB::table('tb_ratecard')->where('kategori_rate','Rate Card Produksi')->first();
        return view('frontend.rate.program',compact('data'));
    }
    public function iklan()
    {
        $data = DB::table('tb_ratecard')->where('kategori_rate','Rate Card Penyiaran', 'iklan')->first();
        return view('frontend.rate.iklan',compact('data'));
    }
}
