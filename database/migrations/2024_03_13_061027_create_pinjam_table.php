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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->integer('id_buku')->unsigned();
            $table->string('nama_peminjam');
            $table->date('pinjam');
            $table->date('kembali');
            $table->foreign('id_buku')->on('buku')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
