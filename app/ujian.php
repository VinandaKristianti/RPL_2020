<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $table = 'ujian';
    protected $fillable=['nik','tgl','jam','ruang'];
    public function koor(){
        return $this->hasMany('App\ujian');
    }
    public function mhs(){

    }
}
