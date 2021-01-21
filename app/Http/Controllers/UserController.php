<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\UserModel;
use DB;
use File;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_user')->get();
        return view('backend.user.index',compact('data'));
    }

    public function addslider()
    {
        return view('backend.slider.addslider');
    }

    public function save(Request $r)
    {
        $id_user = $r->id_user;
        $nama_user = $r->nama_user;
        $username = $r->username;
        $password = $r->password;
        $level = $r->level;
        if($id_user != '')
        {
            if($password != ''){
                $up = DB::table('tb_user')
                        ->where('id_user',$r->id_user)
                        ->update([
                            'nama_user' => $nama_user,
                            'username' => $username,
                            'password' => hash("sha512", md5($password)),
                            'password_repeat' => $password,
                            'level' => $level,
                        ]);
            }else{
                $up = DB::table('tb_user')
                        ->where('id_user',$r->id_user)
                        ->update([
                            'nama_user' => $nama_user,
                            'username' => $username,
                            'level' => $level,
                        ]);
            }
            if($up == TRUE){
                return back()->with('pesan','Update Data Success');
            }else{
                return back()->with('error','Pastikan Format Dengan Benar.');
            }
        }else{
            $up = DB::table('tb_user')
                    ->insert([
                        'nama_user' => $nama_user,
                        'username' => $username,
                        'password' => hash("sha512", md5($password)),
                        'password_repeat' => $password,
                        'level' => $level,
                    ]);
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
        $del = DB::table('tb_user')->where('id_user',$id)->delete();
        if($del == TRUE)
        {
            return back()->with('pesan', 'Hapus Data Berhasil');
        }else{
            return back()->with('error', 'Hapus Data Gagal');
        }
    }

}
