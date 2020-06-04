@extends('layouts.koor') {{-- Memanggil dari folder dosen (seperti admin)--}}
@section('judul','JADWAL PENGUJIAN')

@section('content')
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
          <tr>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
               <th>Tanggal</th>
               <th>Waktu</th>
               <th>Ruang</th>
               <th>Status Ujian</th>
            
          </tr>
          
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <select >
                      <option>LULUS</option>
                      <option>TIDAK LULUS</option>
                   </select >
                  </td>
                  
                </tr>
          
    </div>
@endsection
