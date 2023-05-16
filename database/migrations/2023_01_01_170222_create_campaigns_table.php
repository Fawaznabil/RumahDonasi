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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('pekerjaan');
            $table->string('namaLembaga');
            $table->string('lokasi');
            $table->string('deskripsiDiri');
            $table->string('kategori');
            $table->string('judul');
            $table->string('target');
            $table->string('batasWaktu');
            $table->string('tujuan');
            $table->string('manfaat');
            $table->string('rincian');
            $table->string('gambar');
            $table->string('deskripsiPenggalangan');
            $table->string('ajakan');
            $table->string('tujuanDana');
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
        Schema::dropIfExists('campaigns');
    }
};
