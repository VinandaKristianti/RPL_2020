<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosenControl extends Controller
{
    public function index_profil(){
        return view('dosen.index');
    }

    public function index_bimbingan(){
        return view('bimbingan.index');
    }

    public function index_pengujian(){
        return view('pengujian.index');
    }

    public function index_pengajuan(){
        return view('pengajuanMhs.index');
    }
}
