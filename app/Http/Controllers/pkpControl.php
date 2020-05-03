<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pkp;//memanggil model (sesuai nama model)
use App\mhs;
use App\dosen_koor;

class pkpControl extends Controller
{
    public function index_pkp(){
        $data_pkp = pkp::all();//menampilkan semua atribut yang sudah di seleksi di model
        $data_mhs = mhs::all();
        $data_doskoor = dosen_koor::all();
        return view('pkp.index',compact('data_pkp','data_mhs','data_doskoor'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
}
