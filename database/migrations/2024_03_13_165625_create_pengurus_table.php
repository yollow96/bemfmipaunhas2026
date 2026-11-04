<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama');
            $table->enum('struktur_organisasi', ['inti', 'dewan', 'kerohanian', 'pengaderan', 'AkademikDanKemahasiswaan', 'MinatDanBakat', 'Eksternal', 'Kesekretariatan']);
            $table->enum('jabatan', ['ketua', 'Sekretaris', 'Anggota', 'Bendahara']);
            $table->text('quotes')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('pengurus');
    }
}
