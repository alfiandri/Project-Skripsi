<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilPrediksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_prediksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dataemas');
            $table->string('bulan');
            $table->integer('hargaemas');
            $table->integer('inflasi');
            $table->integer('kursdollar');
            $table->integer('sukubunga');
            $table->integer('hasil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_prediksis');
    }
}
