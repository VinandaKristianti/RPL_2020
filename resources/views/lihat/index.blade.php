@extends('layouts.admin')
@section('judul','JADWAL UJIAN')

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
          <tr>
               <th>Penguji</th>
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
                </tr>
          
    </div>
  </div>

@endsection
