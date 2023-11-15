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
        Schema::create('master_gudang', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang');
            $table->integer('kode_gudang');
            $table->string('area');
            $table->string('tempat')->nullable();
            $table->integer('dibuat_kapan')->nullable();
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
        Schema::dropIfExists('master_gudang');
    }
};
