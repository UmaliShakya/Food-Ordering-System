<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Material1');
            $table->string('Mate1Qty');
            $table->string('Material2');
            $table->string('Mate2Qty');
            $table->string('Material3');
            $table->string('Mate3Qty');
            $table->string('Material4');
            $table->string('Mate4Qty');
            $table->string('Machine1');
            $table->string('Machi1Time');
            $table->string('Machine2');
            $table->string('Machi2Time');
            $table->string('Machine3');
            $table->string('Machi3Time');
            $table->string('Machine4');
            $table->string('Machi4Time');            
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
        Schema::dropIfExists('product_models');
    }
}
