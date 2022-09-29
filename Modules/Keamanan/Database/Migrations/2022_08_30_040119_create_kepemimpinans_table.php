<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepemimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('no_kriteria');
            $table->string('sub_kriteria');
            $table->string('divisi');
            $table->string('triwulan');
            $table->string('tanggal');
            $table->string('thn_pembuatan')->nullable();
            $table->string('level')->nullable();
            $table->string('catatan')->nullable();
            $table->string('status')->nullable();
            $table->string('verifikasi')->nullable();
            $table->string('name')->nullable();
            $table->string('nip')->nullable();
            $table->string('document')->nullable();
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
        Schema::dropIfExists('kepemimpinans');
    }
};
