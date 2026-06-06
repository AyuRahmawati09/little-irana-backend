<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        Schema::create('detail_produk', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->foreign('produk_id')->references('produk_id')->on('produk');
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi');
            $table->string('nama');
            $table->integer('harga');
            $table->string('gambar');
            $table->string('berat');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_produk');
    }
};
