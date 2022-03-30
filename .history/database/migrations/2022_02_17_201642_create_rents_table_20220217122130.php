<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //							booked_on		

        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->integer('cusstomer_id');
            $table->integer('car_id');
            $table->string('scope');
            $table->bigInteger('price');
            $table->date('stard_date');
            $table->date('end_date');
            $table->string('approval_status');
            $table->string('authorised_by');
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
        Schema::dropIfExists('rents');
    }
}