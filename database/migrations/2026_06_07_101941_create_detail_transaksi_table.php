<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('detail_id'); // Primary Key
            
            // Foreign Keys
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('produk_id');
            
            // Definisi Foreign Key (menghubungkan ke tabel transaksi dan produk)
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi')->onDelete('cascade');
            $table->foreign('produk_id')->references('produk_id')->on('produk')->onDelete('cascade');
            
            // Atribut detail produk (Snapshot)
            $table->string('nama');
            $table->integer('harga');
            $table->string('gambar');
            $table->string('berat');
            $table->text('deskripsi');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
};