@extends('layouts.koor') {{-- Memanggil dari folder dosen (seperti admin)--}}
@section('judul','DAFTAR REGISTRASI MAHASISWA')

@section('content')
<div class="col-md-6">
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
              
        </div>
        <div class="col-6">
        </div>
        
        <table class="table">
          <div>
            <td>
          <select >
           <option>Surat Keterangan KP</option>
           <option>Pra KP</option>
           <option>KP</option>
        </select >
            </td>
           </div>
          <tr>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
            
          </tr>
          
              <tr>
                  <td></td>
                  <td></td>
                </tr>
              
    </div>
  </div>
@endsection
