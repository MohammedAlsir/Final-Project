<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('counter_id')->unsigned();
            $table->foreign('counter_id')->references('id')->on('counters')->onDelete('cascade');

            $table->bigInteger('notice_type_id')->unsigned();
            $table->foreign('notice_type_id')->references('id')->on('notice_types')->onDelete('cascade');
           
            $table->string('notice_state')->default('Current');
            $table->string('notes')->default(NULL);
            $table->string('need')->default(NULL);
            $table->date('finish_date')->default(NULL);
            $table->string('measures')->default(NULL);
            $table->float('rating')->default(NULL);
            $table->integer('confirm')->default(NULL);

            $table->bigInteger('office_id')->nullable()->unsigned();
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');

            $table->bigInteger('user_id')->nullable()->unsigned()->default(NULL);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('notices');
    }
}
