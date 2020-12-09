<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueryMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('query_masalah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masalah');
            $table->integer('urutan');
            $table->string('query');
            $table->timestamps();

            $table->foreign('id_masalah')->references('id_masalah')->on('masalahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('query_masalah');
    }
}
