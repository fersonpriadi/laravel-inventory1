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
        Schema::create('master_barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 7);
            $table->string('nama', 50);
            $table->string('deskripsi');
            $table->integer('id_kategory')->nullable();
            $table->integer('id_gudang')->nullable();
            $table->integer('status');
            $table->dateTime('dibuat_kapan')->nullable();
            $table->integer('dibuat_oleh')->nullable();
            $table->dateTime('diperbarui_kapan')->nullable();
            $table->dateTime('diperbarui_oleh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_barang');
    }
};
