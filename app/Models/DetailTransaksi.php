<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    // Menentukan nama tabel di database
    protected $table = 'detail_transaksi';

    // Menentukan primary key khusus
    protected $primaryKey = 'detail_id';

    // Kolom yang diizinkan untuk diisi secara massal
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'nama',
        'harga',
        'gambar',
        'berat',
        'deskripsi'
    ];

    /**
     * Relasi ke tabel Transaksi
     * Satu detail transaksi milik satu transaksi
     */
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'transaksi_id');
    }

    /**
     * Relasi ke tabel Produk
     * Satu detail transaksi merujuk pada satu produk
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'produk_id');
    }
}