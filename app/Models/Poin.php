<?php

<<<<<<< HEAD
// Model: Poin.php
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'poin';
    protected $primaryKey = 'id_poin';

    protected $fillable = ['id_transaksi', 'id_pelanggan', 'jumlah_poin', 'tanggal_diberikan'];
=======
    protected $table = 'poin'; // Nama tabel di database
    protected $primaryKey = 'id_poin'; // Menetapkan primary key


    protected $fillable = [
        'jumlah_poin',
        'tanggal_diberikan',
    ];
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
}
