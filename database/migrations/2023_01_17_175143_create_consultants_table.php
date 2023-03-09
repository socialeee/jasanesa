<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profil');         // foto profil pakar
            $table->string('nama_pakar');   // nama pakar
            $table->string('bidang');       // bidang jasa kepakaran
            $table->string('deskripsi');    // deskripsi keahlian
            $table->string('harga_jasa');      // harga jasa 
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
        Schema::dropIfExists('consultants');
    }
}
