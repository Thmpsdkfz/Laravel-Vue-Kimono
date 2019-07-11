<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKimonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kimonos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('giBrand');
            $table->string('giModel');
            $table->string('giSize');
            $table->string('giColor');
            $table->double('giPrice');
            $table->string('giHaveBag')->default('No gi bag');
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
        Schema::dropIfExists('kimonos');
    }
}
