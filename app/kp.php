<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kp extends Model
{
    protected $table = 'kp';
    protected $fillable = ['mhs_id','dosen_id','ruang','spek','tools','no_telp','pimpinan','dokumen','lembaga','alamat','status_pkp'];
}
