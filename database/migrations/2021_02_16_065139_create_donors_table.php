<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_donor');
            $table->date('tanggal_donor');
            $table->string('no_ktp');
            $table->string('donor_ke');
            $table->string('donor_terakhir');
            $table->string('tempat_donor');
            $table->string('penyelenggara');
            $table->string('donor_apherensis');
            $table->string('hb');
            $table->string('hcc');
            $table->string('bb');
            $table->string('tensi_darah');
            $table->string('suhu_badan');
            $table->string('nadi');
            $table->string('nama_petugas');
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
        Schema::dropIfExists('donors');
    }
}
