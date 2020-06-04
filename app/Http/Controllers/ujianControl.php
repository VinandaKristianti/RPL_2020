<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ujian;

class ujianControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_ujian(){
        $data_ujian = ujian::all()->toArray();//menampilkan semua atribut yang sudah di seleksi di model
        return view('ujian.index',compact('data_ujian'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }

}
