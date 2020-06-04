@extends('layouts.admin')
@section('judul','PENGAJUAN KP')

@section('content')
<div class="col-md-6">
<div class="container" >
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">DONE !</h4>
    <hr>
    <p class="mb-0">Data berhasil ditambahkan !</p>     
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="/Kp/Tambah" method="POST">
        {{csrf_field()}}
     <div class="form-group">
        <div class="form-group">
            <label for="exampleInputEmail1">Lembaga</label>
          <input name="lembaga"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Pimpinan</label>
            <input name="pimpinan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input name="no_telp"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Fax</label>
            <input name="fax"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Spesifikasi</label>
            <input name="spek"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tools</label>
            <input name="tools"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Dokumen</label>
            <input name="dokumen"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
          </div>        
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
 <div> <br> </div>
  <div class="card">
      <div class="card-header"> <strong> Status Pengajuan KP </strong> </div>
          <div class="card-body">
          @if(session('sukses'))
              <div class="alert alert-success" role="alert">
              {{session('sukses')}}
              </div>
          @endif
            <div class="row">     
              <table class="table">
                <tr>
                    <th>Judul</th>
                    <th>Pembimbing</th>
                    <th>Tanggal</th>
                    <th>Disetujui</th>
                </tr>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>
                    
            
</div>
@endsection