<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //								
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_no')->unique();
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('picture');
            $table->date('year_of_reg');            
            $table->bigInteger('price_within');
            $table->bigInteger('price_outside');
            $table->timestamp('added_on');
            $table->timestamp('updated_on');
            $table->string('availability')->default('Available');
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
        Schema::dropIfExists('cars');
    }
}
