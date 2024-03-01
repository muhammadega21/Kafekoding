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
        Schema::create('tb_kelaskafekoding', function (Blueprint $table) {
            $table->string('id_kelaskafekoding')->primary()->unique();
            $table->time('jam_awal_kelaskafekoding');
            $table->time('jam_akhir_kelaskafekoding');
            $table->string('ruangan_kelaskafekoding');
            $table->string('kelas_kelaskafekoding');
            $table->string('link_kelaskafekoding');
            $table->string('gambar_kelaskafekoding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kelaskafekoding');
    }
};