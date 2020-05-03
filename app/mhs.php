<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nim','nama','email','semester','id_periode'];
    public function surat_kp(){
        return $this->hasMany('App\surat_kp');
    }
    public function pra_kp(){
        return $this->belongsTo('App\pra_kp');
    }
    public function kp(){
        return $this->belongsTo('App\kp');
    }
}
