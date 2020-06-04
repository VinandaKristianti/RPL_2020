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
    
    public function tambah(Request $request){
        \App\skp ::create($request->all());
        return redirect('Skp')->with('sukses','Silakan melakukan pengecekan status pengajuan Anda secara mandiri !');
    }
}
