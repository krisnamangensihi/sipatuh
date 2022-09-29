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
        Schema::create('point5s', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('jenis');
            $table->string('nomer_surat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('wulan');
            $table->string('divisi');
            $table->string('bulan');
            $table->dateTime('tanggal_dibuat');
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
        Schema::dropIfExists('point5s');
    }
};
