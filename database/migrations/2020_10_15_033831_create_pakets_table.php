<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('price');
            $table->string('price_after');
            $table->string('user_registered');
            $table->string('resource_power');
            $table->string('disk_space');
            $table->string('databases');
            $table->string('domain');
            $table->string('backup');
            $table->string('ssl');
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
        Schema::dropIfExists('pakets');
    }
}
