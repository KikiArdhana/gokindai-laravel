<?php

<<<<<<< HEAD
// Model: Transaksi.php
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    
    protected $fillable = [
        'id_pegawai', 'id_pelanggan', 'id_poin', 'tanggal_transaksi', 
        'total_pembelian', 'metode_pembayaran'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_pelanggan');
    }

    public function poin()
    {
        return $this->belongsTo(Poin::class, 'id_poin');
    }

    public function items()
    {
        return $this->belongsToMany(Menu::class, 'detail_transaksi', 'id_transaksi', 'id_item')
                    ->withPivot('subtotal_harga');
    }
=======
    protected $table = 'transaksi'; // Nama tabel di database
    protected $primaryKey = 'id_transaksi'; // Menetapkan primary key
  

    protected $fillable = [
        'tanggal_transaksi',
        'total_pembelian',
        'metode_pembayaran',
    ];
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
}
