@extends('layouts.dosen') {{-- Memanggil dari folder dosen (seperti admin)--}}
@section('judul','PENGAJUAN UJIAN')

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
               <th>Batal</th>
            
          </tr>
          
              <tr>
                  <td></td>
                  <td></td>
                  <div>
                  <td>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                  </td>
                </div>
                </tr>
              
    </div>
    <div>
      <td>
      <button type="submit" class="btn btn-primary">Ajukan</button>
      </td>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
