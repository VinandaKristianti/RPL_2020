<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kp;

class kpControl extends Controller
{
    public function index_kp(){
        $data_kp = kp::all();//menampilkan semua atribut yang sudah di seleksi di model
        return view('kp.index',compact('data_kp'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }

    public function index_ujian(){
        return view('lihat.index');
    }
}
