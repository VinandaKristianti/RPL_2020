<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_koor extends Model
{
    protected $table = 'dosen_koor';
    protected $fillable = ['nik','nama_dos','email','koor'];
    public function dos_pra_kp(){
        return $this->belongsTo('App\pra_kp');
    }
    public function dos_kp(){
        return $this->belongTo('App\kp');
    }
}
