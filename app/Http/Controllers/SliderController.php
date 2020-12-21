<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\SliderModel;
use DB;
use File;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'slider' => 'mimes:jpeg,jpg,png|max:50000'
        );
    }

    public function index()
    {
        $data = DB::table('tb_slider')->get();
        return view('backend.slider.index',compact('data'));
    }

    public function addslider()
    {
        return view('backend.slider.addslider');
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Slider Dengan Benar.');
        }else{
            $filename = $r->slider->getClientOriginalName();
            $r->file('slider')->move('slider',$r->slider->getClientOriginalName());
            // simpan
            $input = new SliderModel;
            $input->description = $r->deskripsi;
            $input->image = $filename;
            $input->save();

            return redirect('viewslider')->with('pesan','Input Data Success');
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_slider')->where('id_slider',$id)->first();
        File::delete('slider/'.$cek->image);
        $del = DB::table('tb_slider')->where('id_slider',$id)->delete();
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
        $data = DB::table('tb_slider')->where('id_slider',$id)->first();
        return view('backend.slider.editslider',compact('data'));
    }

    public function update(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Slider Dengan Benar.');
        }else{
            if($r->file('slider') == NULL)
            {
                $up = DB::table('tb_slider')->where('id_slider',$r->id_slider)->update([
                    'description' => $r->deskripsi
                ]);
            }else{
                $filename = $r->slider->getClientOriginalName();
                $r->file('slider')->move('slider',$r->slider->getClientOriginalName());
                $up = DB::tbale('tb_slider')->where('id_slider',$r->id_slider)->update([
                    'description' => $r->deskripsi, 'image' => $filename]);
            }

            if($up == TRUE){
                return redirect('viewslider')->with('pesan','Update Data Success');
            }else{
                return back()->with('validasi','Pastikan Format Slider Dengan Benar.');
            }
        }
    }
}
