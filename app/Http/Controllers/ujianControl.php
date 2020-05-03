<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ujianControl extends Controller
{
    public function index_ujian(){
        $data_ujian = ujian::all();//menampilkan semua atribut yang sudah di seleksi di model
        return view('ujian.index',compact('data_ujian'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
}
