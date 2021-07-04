<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhereaboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whereabouts', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('uuid');
            $table->string('title');
            $table->string('part');
            $table->string('progress');
            $table->string('source');
            $table->string('note');
            $table->string('kind');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whereabouts');
    }
}
