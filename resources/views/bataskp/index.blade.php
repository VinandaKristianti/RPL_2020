@extends('layouts.koor') {{-- Memanggil dari folder dosen (seperti admin)--}}
@section('judul','SET BATAS KP')

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
               <th>Tanggal</th>
               <th>Waktu</th>
            
          </tr>
          
              <tr>
                  <td></td>
                  <td></td>
                  
                </tr>
              
    </div>
</div>
<div>
  <td>
  <button type="submit" class="btn btn-primary">Save Changes</button>
  </td>

@endsection
