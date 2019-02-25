<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTwoColumnsFromHasilprediksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil_prediksis', function (Blueprint $table) {
            $table->dropColumn('id_dataemas');
            $table->dropColumn('hargaemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasilprediksi', function (Blueprint $table) {
            //
        });
    }
}
