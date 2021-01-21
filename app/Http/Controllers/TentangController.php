<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\TentangModel;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'file' => 'mimes:pdf,jpeg,jpg,png|max:50000'
        );
    }

    public function index()
    {
        $data['isi'] = DB::table('tb_tentang')->get();
        return view('backend.tentangkami.index',$data);
    }

    public function add()
    {
        return view('backend.tentangkami.add');
    }

    public function save(Request $r)
    {
        $type = $r->pilihan;
        if($type == 1)
        {
            DB::table('tb_tentang')->insert(
                [
                    'title' => $r->title,
                    'type' => $r->pilihan,
                    'isi' => $r->isi
                ]
                );


            return redirect('tentangkami')->with('pesan','Input Data Success');
        }
        else if($type == 2 || $type == 3)
        {
            $validator = Validator::make($r->all(),$this->rules);
            if($validator->fails()){
                return back()->with('pesan','Pastikan Format File Dengan Benar.');
            }else{
                $filename = $r->file->getClientOriginalName();
                $r->file('file')->move('tentang',$r->file->getClientOriginalName());
                // simpan
                DB::table('tb_tentang')->insert(
                    [
                        'title' => $r->title,
                        'type' => $r->pilihan,
                        'isi' => $filename
                    ]
                );
    
                return redirect('tentangkami')->with('pesan','Input Data Success');
            }
        }
    }

    public function edit($ids)
    {
        $id = decrypt($ids);
        $data['edit'] = DB::table('tb_tentang')->where('id_tentang',$id)->first();
        return view('backend.tentangkami.edit',$data);
    }

    public function saveedit(Request $r)
    {
        $type = $r->pilihan;
        if($type == 1)
        {
            $update = DB::table('tb_tentang')->where('id_tentang',$r->id_tentang)->update(
                [
                    'title' => $r->title,
                    'type' => $r->pilihan,
                    'isi' => $r->isi,
                ]
            );

            return redirect('tentangkami')->with('pesan','Update Data Success');
        }
        else if($type == 2)
        {
            $validator = Validator::make($r->all(),$this->rules);
            if($validator->fails()){
                return back()->with('validasi','Pastikan Format File Dengan Benar.');
            }else{
                $filename = $r->file->getClientOriginalName();
                $r->file('file')->move('tentang',$r->file->getClientOriginalName());
                // simpan
                $update = DB::table('tb_tentang')->where('id_tentang',$r->id_tentang)->update(
                    [
                        'title' => $r->title,
                        'type' => $r->pilihan,
                        'isi' => $filename,
                    ]
                );
    
                return redirect('tentangkami')->with('pesan','Update Data Success');
            }
        }
    }

    public function delete($ids)
    {
        $id = decrypt($ids);
        $delete = DB::table('tb_tentang')->where('id_tentang',$id)->delete();
        return back()->with('pesan','Delete Data Success');
    }

    // frontend
    public function tentangkami($ids)
    {
        $id = decrypt($ids);
        $data['detail'] = DB::table('tb_tentang')->where('id_tentang',$id)->get();
        return view('frontend.tentangkami.index',$data);
    }
}
