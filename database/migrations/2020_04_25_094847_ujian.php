<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ujian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function ($table) {
            $table->increments('id_jadwal');
            $table->date('tgl');
            $table->time('jam');
            $table->string('ruang');
            $table->timestamps();
            $table->integer('dosen_id');
            $table->char('nim',8);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ujian');
    }
}
