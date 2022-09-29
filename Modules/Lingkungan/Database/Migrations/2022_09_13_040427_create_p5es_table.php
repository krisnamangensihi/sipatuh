<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p5es', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            // $table->string('nama');
            // $table->string('nomer_surat');
            $table->string('perihal');
            $table->string('periode')->nullable();
            $table->string('divisi');
            $table->string('wulan');
            $table->string('bulan');
            $table->dateTime('tanggal_dibuat');
            $table->string('berkas');
            $table->string('keterangan');
            $table->string('status')->nullable();
            $table->string('catatan')->nullable();
            $table->string('verifikasi')->nullable();
            $table->string('name')->nullable();
            $table->string('nip')->nullable();
            $table->string('dokumen')->nullable();
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
        Schema::dropIfExists('p5es');
    }
};
