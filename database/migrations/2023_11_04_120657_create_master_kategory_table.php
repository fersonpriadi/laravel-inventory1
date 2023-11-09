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
        Schema::create('master_kategory', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('jenis_barang');
            $table->string('kemasang_barang');
            $table->string('status')->nullable();
            $table->integer('id_kategory')->nullable();
            $table->integer('id_gudang')->nullable();
            $table->dateTime('dibuat_kapan');
            $table->integer('dibuat_oleh')->nullable();
            $table->dateTime('diperbarui_kapan')->nullable();
            $table->dateTime('diperbarui_oleh')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_kategory');
    }
};
