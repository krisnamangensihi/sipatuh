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
        Schema::create('safetis', function (Blueprint $table) {
         $table->id();
            $table->string('user_id');
            $table->string('no_kriteria');
            $table->string('sub_kriteria');
                $table->string('triwulan')->nullable();
            $table->string('thn_pembuatan')->nullable();
            $table->date('tgl_pelaporan');
            $table->string('divisi');
            $table->string('level');
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
        Schema::dropIfExists('safetis');
    }
};
