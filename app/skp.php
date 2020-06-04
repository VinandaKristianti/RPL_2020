<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class skp extends Model
{
    protected $table='suratkp';
    protected $fillable=['lembaga','status_skp','no_telp','pimpinan','dokumen','alamat','fax','tools','spesifikasi'];

}
