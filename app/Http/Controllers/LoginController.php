<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        if ($request->session()->has('id')) 
        {
            return redirect("/");
        }
        else
        {
            return view ("backend.login.index");
        }
    }

    public function login(Request $r)
    {
        $this->validate($r,[
            'username' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
            'password' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
        ]);
        $username = $r->username;
        $password = hash("sha512", md5($r->password));

        $cek = DB::table('tb_user')->where('username',$username)->where('password',$password)->first();
        if($cek == TRUE)
        {
            $r->session()->put("id_user", $cek->id_user);
            $r->session()->put("nama_user", $cek->nama_user);
            return view('backend.home')->with('pesan','Selamat Datang');
        }else{
            return back()->with('error','Silahkan Login Kembali');
        }
    }

    public function register(Request $r)
    {
        $nama_user = $r->nama_user;
        $username = $r->username;
        $password = $r->password;
        $password_repeat = $r->password_repeat;
        if($password == $password_repeat)
        {
            $pass = hash("sha512", md5($r->password));
            $input = new UserModel();
            $input->nama_user = $nama_user;
            $input->username = $username;
            $input->password = $pass;
            $input->password_repeat = $password_repeat;
            $input->save();

            return back()->with('pesan','Data Berhasil Di Inputkan.');
        }else{
            return back()->with('pesan','Data Gagal Di Inputkan.');
        }
    }

    public function logout(Request $r)
    {
    	$r->session()->forget('id_user');
        $r->session()->forget('nama_user');
        $r->session()->flush();
    	return redirect("/");
    }
}
