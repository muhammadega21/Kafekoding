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
        Schema::create('tb_hero', function (Blueprint $table) {
            $table->string('id_hero')->primary()->unique();
            $table->string('judul_hero');
            $table->text('deskripsi_hero');
            $table->string('link_hero');
            $table->string('status_hero');
            $table->string('gambar_hero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_hero');
    }
};
