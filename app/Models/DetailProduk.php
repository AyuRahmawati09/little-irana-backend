<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    protected $table = 'detail_produk';
    protected $primaryKey = 'detail_id';
    protected $fillable = ['produk_id', 'transaksi_id', 'nama', 'harga', 'gambar', 'berat', 'deskripsi'];

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'transaksi_id');
    }
}