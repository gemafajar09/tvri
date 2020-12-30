<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\NewsModel;
use File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'image' => 'mimes:jpeg,jpg,png|max:50000'
        );
    }

    public function index()
    {
        $data = DB::table('tb_news')->get();
        return view('backend.news.index',compact('data'));
    }

    public function addnews()
    {
        return view('backend.news.addnews');
    }

    public function save(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Gambar Dengan Benar.');
        }else{
            $filename = $r->image->getClientOriginalName();
            $r->file('image')->move('news',$r->image->getClientOriginalName());
            // simpan
            $input = new NewsModel;
            $input->tanggal = date("Y-m-d");
            $input->judul = $r->judul; 
            $input->deskripsi = $r->deskripsi;
            $input->foto = $filename;
            $input->save();

            return redirect('viewnews')->with('pesan','Input Data Success');
        }
    }

    public function deletes($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_news')->where('id_news',$id)->first();
        File::delete('news/'.$cek->foto);
        $del = DB::table('tb_news')->where('id_news',$id)->delete();
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
        $data['data'] = DB::table('tb_news')->where('id_news',$id)->first();
        return view('backend.news.editnews',$data);
    }

    public function update(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Image Dengan Benar.');
        }else{
            if($r->file('image') == NULL)
            {
                $up = DB::table('tb_news')->where('id_news',$r->id_news)->update([
                    'judul' => $r->judul, 
                    'deskripsi' => $r->deskripsi
                ]);
            }else{
                $filename = $r->image->getClientOriginalName();
                $r->file('image')->move('news',$r->image->getClientOriginalName());
                $up = DB::tbale('tb_news')->where('id_news',$r->id_news)->update([
                    'judul' => $r->judul, 'deskripsi' => $r->deskripsi,'foto' => $filename]);
            }

            if($up == TRUE){
                return redirect('viewnews')->with('pesan','Update Data Success');
            }else{
                return back()->with('validasi','Pastikan Format Image Dengan Benar.');
            }
        }
    }

    // frontend
    public function tampildetail($ids)
    {
        $id = decrypt($ids);
        $cek = DB::table('tb_news')->where('id_news',$id)->first();
        $data['news'] = DB::table('tb_news')->where('id_news',$id)->first();
        $data['lainnya'] = DB::table('tb_news')->limit(4)->get();
        $data['lainnya1'] = DB::table('tb_news')->limit(8)->get();
        return view('frontend.detailberita.index',$data);
    }

    public function showall()
    {
        $data['show'] = DB::table('tb_news')->orderBy('id_news','DESC')->get();
        return view('frontend.detailberita.artikel',$data);
    }
}
