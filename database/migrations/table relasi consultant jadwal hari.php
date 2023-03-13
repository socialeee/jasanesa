<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantscheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('consultant_schedule', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('consultant_id')->constrained();
        //     $table->foreignId('schedule_id')->constrained();
        //     $table->foreignId('hari_id')->constrained();
        //     $table->timestamps();
        // });

        // Schema::create('day_schedule', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('hari_id')->constrained();
        //     $table->foreignId('schedule_id')->constrained();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('consultant_schedule');
        // Schema::dropIfExists('day_schedule');
    }
}
