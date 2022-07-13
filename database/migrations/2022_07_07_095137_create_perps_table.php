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
        Schema::create('perps', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_buku');
            $table->string('judul_buku');
            $table->integer('tahun_terbit');
            $table->string('kota_terbit');
            $table->string('pengarang');
            $table->string('penerbit');
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
        Schema::dropIfExists('perps');
    }
};
