<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostsTable extends Migration
{
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('cost');
            $table->date('date');
            $table->unsignedBigInteger('id_cat');
            $table->timestamps();

            $table->foreign('id_cat')->references('id')->on('cost_categories');
        });
    }
    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
