<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suratkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('suratkp', function (Blueprint $table) {
            $table->increments('id_skp');
            $table->integer('nim');
            $table->string('lembaga');
            $table->integer('status_skp');
            $table->string('no_telp');
            $table->string('pimpinan');
            $table->string('dokumen');
            $table->string('alamat');
            $table->string('fax');
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
        
        Schema::dropIfExists('suratkp');
        
    }
}
