<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Pemesan');
            $table->string('Nama_Barang');
            $table->string('Harga_Barang');
            $table->string('Penawaran_Harga_Kembali_terendah');
            $table->string('Jumlah_Bulan_Pengangsuran_terlama');
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
        Schema::dropIfExists('tb_pemesanans');
    }
}
