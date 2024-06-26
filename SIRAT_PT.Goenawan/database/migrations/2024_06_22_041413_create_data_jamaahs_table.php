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
        Schema::create('data_jamaahs', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal_Keberangkatan');
            $table->date('Tanggal_Kepulangan');
            $table->string('Paket');
            $table->string('Hotel_Madinah');
            $table->string('Hotel_Mekkah');
            $table->string('program');
            $table->integer('harga');
            $table->string('pesawat');
            $table->integer('total_seat');
            $table->integer('Terisi');
            $table->integer('Sisa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jamaahs');
    }
};
