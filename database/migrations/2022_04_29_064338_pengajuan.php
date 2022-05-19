<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usaha_menengah', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Pengajuan');
            $table->string('No_surat');
            $table->timestamp('Tanggal_pengajuan');
            $table->string('Perihal');
            $table->timestamp('tanggal_diterima');
            $table->string('Skala_usaha');
            $table->string('Status');
            $table->string('Action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
};
