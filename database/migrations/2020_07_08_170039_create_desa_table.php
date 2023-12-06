<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa', 64);
            $table->string('nama_kecamatan', 64);
            $table->string('nama_kabupaten', 64);
            $table->string('tagline_desa', 255);
            $table->string('alamat', 191);
            // $table->string('nama_kepala_desa', 64);
            // $table->string('alamat_kepala_desa', 64);
            $table->string('logo', 64);
            // $table->text('kata_sambutan_desa', 100);
            // $table->string('gambar', 64);
            // $table->string('nama_wilayah', 64);
            // $table->text('deskripsi_wilayah', 100);
            // $table->text('peta_wilayah', 100);
            $table->text('sejarah_desa');
            $table->text('pengumuman');
            $table->string('kode_desa', 64);
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
        Schema::dropIfExists('desa');
    }
}
