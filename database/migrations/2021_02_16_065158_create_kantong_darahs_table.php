<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantongDarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantong_darahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kantong');
            $table->string('id_donor');
            $table->string('komponen');
            $table->date('tgl_kadaluarsa');
            $table->string('jenis');
            $table->string('status');
            $table->date('tanggal_keluar');
            $table->string('rs');
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
        Schema::dropIfExists('kantong_darahs');
    }
}
