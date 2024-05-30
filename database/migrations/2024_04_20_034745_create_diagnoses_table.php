<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id('diagnosis_id');
            $table->string('nama_pengguna');
            $table->string('alamat_pengguna');
            $table->string('kode_penyakit');
            $table->foreign('kode_penyakit')->references('kode_penyakit')->on('deseases');
            $table->double('nilai_akhir');
            $table->json('hasil');
            $table->json('gejala');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
    }
};