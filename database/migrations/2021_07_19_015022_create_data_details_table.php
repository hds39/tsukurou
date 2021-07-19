<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_id');
            $table->date('date');
            $table->string('categories');
            $table->integer('balance');
            
            $table->timestamps();

            $table->foreign('data_id')->references('id')->on('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_details');
    }
}
