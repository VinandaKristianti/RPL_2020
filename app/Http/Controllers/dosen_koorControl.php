<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kp;
use App\pkp;
use App\skp;
use App\ujian;
use App\dosen_koor;

class dosen_koorControl extends Controller
{
    public function index_koor(){
        return view('koor.index');
    }

    public function index_bimbingan(){
        $dosen_id=Auth::guard('dosen')->user()->id;
        $kp= kp::where('dosen_id', '=', $dosen_id)->get()->toArray();
        return view('bimbing_koor.index');
    }

    public function index_pengujian(){
        $ujian = ujian::all()->toArray();
        return view('pengujian_koor.index', compact('ujian'));
    }

    public function index_pengajuan(){ //masih bingung
        return view('pengajuan_koor.index');
    }

    public function index_verifikasiKP(){
        $kp= kp::where('status_kp', '=', '0')->get()->toArray();
        return view('verifikasi.index');
    }

    public function verKP(Request $request){
        kp::where('id_kp', $request->get('id'))->update(['status_kp' => 1]);
        return redirect()->route('verifikasi')->with('success','Data ditambahkan');;
    }

    public function index_verifikasiSKP(){
        $skp= skp::where('status_sk', '=', '0')->get()->toArray();
        return view('verifikasi.index', compact('skp'));
    }

    public function verSKP(Request $request){
        skp::where('id_sk', $request->get('id'))->update(['status_sk' => 1]);
        return redirect()->route('verifikasi')->with('Success','Data ditambahkan');;
    }

    public function index_verifikasiPraKP(){
        $pkp= pkp::where('status_pkp', '=', '0')->get()->toArray();
        return view('verifikasi.index', compact('pkp'));
    }

    public function verPraKP(Request $request){
        pkp::where('id_pkp', $request->get('id'))->update(['status_pkp' => 1]);
        return redirect()->route('verifikasi')->with('Success','Data ditambahkan');;
    }
    
    public function index_regis(){ //BELUMTAU 
        return view('regis.index');
    }

    public function index_aturjadwal(){
        $ujian = ujian::where('dosen_id', '=', '0')->get()->toArray();
        return view('aturjadwal.index',compact('ujian'));
    }
    public function aturJadwal(Request $request){
        ujian::where('id_jadwal', $request->get('id')->update(['dosen_id' => 1]));
        return redirect()->route('Aturjadwal')->with('Success','Jadwal Diatur');
    }

    public function index_aturkp(){ //BELUMTAU
        return view('bataskp.index');
    }

}
