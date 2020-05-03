<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PraKp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pra_kp', function (Blueprint $table) {
            $table->bigIncrements('id_pkp');
            $table->integer('mhs_id');
            $table->integer('dosen_id');
            $table->string('ruang');
            $table->string('spek');
            $table->string('tools');
            $table->string('no_telp');
            $table->string('pimpinan');
            $table->mediumText('dokumen');
            $table->string('lembaga');
            $table->string('alamat');
            $table->string('status_pkp');
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
        Schema::dropIfExists('pra_kp');
    }
}
