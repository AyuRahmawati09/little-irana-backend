<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    // Menentukan primary key
    protected $primaryKey = 'transaksi_id';

    protected $fillable = [
        'user_id', 
        'alamat_pengiriman', 
        'rincian_pesanan', 
        'ringkasan_pembayaran', 
        'total_bayar'
    ];

    
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id', 'transaksi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}