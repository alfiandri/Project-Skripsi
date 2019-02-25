<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_emas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bulan');
            $table->integer('hargaemas');
            $table->integer('inflasi');
            $table->integer('kursdollar');
            $table->integer('sukubunga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_emas');
    }
}
