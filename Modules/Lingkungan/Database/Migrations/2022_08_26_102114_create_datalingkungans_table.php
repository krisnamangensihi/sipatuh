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
        Schema::create('datalingkungans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('dok')->nullable();
            $table->dateTime('tanggal_dibuat');
            $table->string('berkas');
            $table->string('keterangan');
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
        Schema::dropIfExists('datalingkungans');
    }
};
