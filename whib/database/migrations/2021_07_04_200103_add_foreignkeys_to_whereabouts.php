<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToWhereabouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whereabouts', function (Blueprint $table) {
            $table->foreign('kind')->references('name')->on('kind_of_whereabouts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('whereabouts', function (Blueprint $table) {
            $table->dropForeign('whereabouts_kind_foreign');
        });
    }
}
