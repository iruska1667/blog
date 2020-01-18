<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('cost_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cat_type');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('cost_categories');
    }
}
