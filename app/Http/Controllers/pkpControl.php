<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pkp;//memanggil model (sesuai nama model)

class pkpControl extends Controller
{
    public function index_pkp(){
        $data_pkp = pkp::all();//menampilkan semua atribut yang sudah di seleksi di model
        
        return view('prakp.index',compact('data_pkp'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
}
