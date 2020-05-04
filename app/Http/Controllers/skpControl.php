<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skp;

class skpControl extends Controller
{
    public function index_skp(){
        $data_skp = skp::all();//menampilkan semua atribut yang sudah di seleksi di model
        return view('skp.index',compact('data_skp'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
}
