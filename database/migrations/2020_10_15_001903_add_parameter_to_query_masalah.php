<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParameterToQueryMasalah extends Migration
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
            $table->string('parameter')->after('query');
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
            $table->dropColumn('parameter');
        });
    }
}
