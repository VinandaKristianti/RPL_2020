<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $table = 'ujian';
    protected $fillable=['nik','nim','tgl','jam','ruang'];
    public function dosen(){
        return $this->hasMany('App\ujian');
    }
    public function mhs(){
        //return $this
    }
}
