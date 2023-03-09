<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('jam'); // mulai 08.00 - 22.00
            $table->unsignedBigInteger('hari_id');
            $table->foreign('hari_id')->references('id')->on('haris')->delete('cascade');
            $table->unsignedBigInteger('consultant_id');
            $table->foreign('consultant_id')->references('id')->on('consultants')->delete('cascade');
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
        Schema::dropIfExists('schedules');
    }
}
