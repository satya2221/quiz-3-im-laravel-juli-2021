<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToGarapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('garapan', function (Blueprint $table) {
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek');
            $table->foreign('id_anak_buah')->references('id')->on('anak_buah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garapan', function (Blueprint $table) {
            $table->dropForeign(['id_proyek','id_anak_buah']);
        });
    }
}
