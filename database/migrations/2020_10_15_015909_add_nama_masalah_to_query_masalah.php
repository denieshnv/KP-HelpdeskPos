<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaMasalahToQueryMasalah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('query_masalah', function (Blueprint $table) {
            //
            $table->string('nama_masalah')->after('id');

            $table->foreign('nama_masalah')->references('nama_masalah')->on('masalahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('query_masalah', function (Blueprint $table) {
            //
        });
    }
}
