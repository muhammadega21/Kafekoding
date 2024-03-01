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
        Schema::create('tb_tentangkami', function (Blueprint $table) {
            $table->string('id_tentangkami')->primary()->unique();
            $table->text('deskripsi_tentangkami');
            $table->string('gambar1_tentangkami');
            $table->string('gambar2_tentangkami');
            $table->string('gambar3_tentangkami');
            $table->string('gambar4_tentangkami');
            $table->text('status_tentangkami');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tentangkami');
    }
};
