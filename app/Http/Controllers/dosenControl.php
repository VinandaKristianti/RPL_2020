<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\kp;
use App\ujian;
use App\dosen_koor;
use App\skp;


class dosenControl extends Controller
{
    public function __construct(){
        $this->middleware('auth:dosen');
    }
    public function index_profil(){
        $data_dosen = dosen_koor::all();
        return view('dosen.index',compact('data_dosen'));
    }

    public function index_bimbingan(){
        $dosen_id=Auth::guard('dosen')->user()->id;
        $kp= kp::where('dosen_id', '=', $dosen_id)->get()->toArray();
        return view('bimbingan.index', compact('kp'));
    }

    public function index_pengujian(){
        $kp= kp::where('id_kp', '=', null)->get()->toArray();
        $dosen= dosen_koor::all()->toArray();
        
        return view('pengujian.index', compact('jadwal'));
    }
    public function tambahUji(Request $request)
    {
        
        $this->validate($request, [
            'Tanggal' => 'required',
            'Ruangan' => 'required',
            'Jam' => 'required',
            'Dosen Penguji' => 'required'  

        ]);
        $jadwalujian= new ujian([
            'nim' => $request->get('nim'),
            'tanggal' => $request->get('Tanggal'),
            'ruang' => $request->get('Ruangan'),
            'jam' => $request->get('Jam'),
            'dosen_id' => $request->get('Dosen Penguji'),
        ]);
        $jadwalujian->save();

        $id_jadwal= ujian::where('nim', '=', $request->get('nim'))->value('id_uji');
        Kp::where('id_kp', $request->get('id'))->update(['id_jadwal' => $id_jadwal]);
        return redirect()->route('pengujian');
        
    }

    public function index_pengajuan(){ //blm pasti
        
        $jadwal= ujian::all()->toArray();
        $nim=Auth::user()->NIM;
        $skp = skp::where([
            ['nim', '=', $nim]
        ])->get()->toArray();
        return view('pengajuanMhs.index', compact('skp'));
    }
    public function tambahAju(Request $request)
    {
        $this->validate($request, [
            'Lembaga' => 'required',
            'Pimpinan' => 'required',
            'Telp' => 'required',
            'Alamat' => 'required',
            'Fax' => 'required',
            'doc' => 'required'      

        ]);

        if($request->hasFile('doc'))
        {
            $fullname = $request->file('doc')->getClientOriginalName();
            $nim =Auth::user()->NIM;
            $ext =$request->file('doc')->getClientOriginalExtension();
            $final = $nim.'Sk'.'_'.time().'.'.$ext;

            $path = $request->file('doc')->storeAs('public/suket', $final);
        }

        $skp = new skp([
            'nim' => Auth::user()->NIM,
            'lembaga' => $request->get('Lembaga'),
            'pimpinan' => $request->get('Pimpinan'),
            'no_telp' => $request->get('Telp'),
            'alamat' => $request->get('Alamat'),
            'dokumen' => $final,
            'fax' => $request->get('Fax')
        ]);
        $skp->save();
        return redirect()->route('Pengajuan')->with('success','Data Added');
    }

}
