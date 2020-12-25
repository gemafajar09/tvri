<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LinkController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_link')->first();
        return view('backend.link.index',compact('data'));
    }

    public function update(Request $r)
    {
        $id_link = $r->id_link;
        $link = $r->link;
        $up = DB::table('tb_link')->where('id_link',$r->id_link)->update(['link' => $link]);
        if($up == TRUE){
            return back()->with('pesan','Update Data Success');
        }else{
            return back()->with('validasi','Pastikan Format Dengan Benar.');
        }
    }

    public function live(){
        $data['live'] = DB::table('tb_link')->first();
        return view('frontend.live.index',$data);
    }
}
