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
            $table->string('foto_profil');  // foto profil pakar
            $table->string('nama_pakar');   // nama pakar
            $table->string('email_pakar');  // email pakar
            $table->unsignedBigInteger('bidang_id');       // bidang rumpun ilmu
            $table->string('deskripsi');    // deskripsi keahlian
            $table->string('pengalaman');   // pengalaman
            $table->string('harga_jasa');   // harga jasa 
            $table->timestamps();

            $table->foreign('bidang_id')->references('id')->on('bidang')->delete('cascade');
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
