<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeramalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peramalans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tanggal_peramalan');
            $table->integer('bulan_peramalan');
            $table->integer('tahun_peramalan');
            $table->string('komponen');
            $table->string('golongan_darah');
            $table->string('hasil');
            $table->string('aktual');
            $table->string('mape');
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
        Schema::dropIfExists('peramalans');
    }
}
