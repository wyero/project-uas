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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('kelas');
            $table->string('jenis_kelamin');
            $table->string('nomor_tlpn');
            $table->integer('kode_buku');
            $table->string('judul_buku');
            $table->date('tanggal_meminjam');
            $table->date('tanggal_pengembalian');
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
        Schema::dropIfExists('pinjams');
    }
};
