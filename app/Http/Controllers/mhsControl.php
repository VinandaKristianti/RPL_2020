<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mhs;//memanggil modelnya

class mhsControl extends Controller
{
    public function index_mhs(){
        $data_mhs = mhs::all();//menampilkan semua atribut yang sudah di seleksi di model
        return view('mhs.index',compact('data_mhs'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
}
