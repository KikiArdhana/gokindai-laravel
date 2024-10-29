<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi'; // Nama tabel di database
    protected $primaryKey = 'id_transaksi'; // Menetapkan primary key
  

    protected $fillable = [
        'tanggal_transaksi',
        'total_pembelian',
        'metode_pembayaran',
    ];
}
