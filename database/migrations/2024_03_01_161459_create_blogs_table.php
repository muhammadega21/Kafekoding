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
        Schema::create('tb_blog', function (Blueprint $table) {
            $table->string('id_blog')->primary()->unique();
            $table->string('author_blog');
            $table->string('judul_blog');
            $table->text('deskripsi_blog');
            $table->string('link_blog');
            $table->string('gambar_blog');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_blog');
    }
};
