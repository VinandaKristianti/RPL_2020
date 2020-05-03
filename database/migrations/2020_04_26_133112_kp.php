<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp', function (Blueprint $table) {
            $table->bigIncrements('id_kp');
            $table->integer('nim');
            $table->integer('id_jadwal');
            $table->string('spesifikasi');
            $table->string('no_telp');
            $table->string('pimpinan');
            $table->mediumText('dokumen');
            $table->string('lembaga');
            $table->string('status_kp');
            $table->string('status_ujian');
            $table->integer('nik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('kp');
        
    }
}
