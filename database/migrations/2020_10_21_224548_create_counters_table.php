<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('counter_number');
            $table->string('full_name');
            $table->string('patriot_number');
            $table->string('neighborhood');
            $table->string('square_number');
            $table->string('street_number');
            $table->string('phone_number');

            $table->string('password');
            $table->string('notify')->default(NULL);
            $table->string('amount')->default(NULL);

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('sector_type_id')->unsigned();
            $table->foreign('sector_type_id')->references('id')->on('sectors_types')->onDelete('cascade');

            $table->bigInteger('office_id')->unsigned();
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            
           
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
        Schema::dropIfExists('counters');
    }
}
