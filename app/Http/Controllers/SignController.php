<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class SignController extends Controller
{
    public function home(){
        return view ('template');
    }

    public function add(request $request){
        $nama=$request->input('nama');
        $email=$request->input('email');
        $password=$request->input('password');
        DB::insert('insert into clients(nama, email, password) values(?,?,?)', [$nama, $email, $password]);

        return redirect('/dash');
    }

    public function dash(){
        return view ('dashboard');
    }
}
