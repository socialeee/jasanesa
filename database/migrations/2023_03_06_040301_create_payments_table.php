<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_pembayaran');
            $table->string('kode_booking')->unique(); //generate sendiri setiap transaksi
            $table->string('invoice')->unique(); // generate invoice
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('consultant_id');
            $table->unsignedBigInteger('total_pembayaran');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('consultant_id')->references('id')->on('consultants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
