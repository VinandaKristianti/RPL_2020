<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen_koor;

class dosen_koorControl extends Controller
{
    public function index_doskoor(){
        $data_doskoor = dosen_koor::all();
        return view('dosen_koor.index',compact('data_doskoor'));
    }
}
