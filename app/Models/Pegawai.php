<?php

<<<<<<< HEAD
// Model: Pegawai.php
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = ['nama_kasir', 'role'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pegawai');
    }
=======
    protected $table = 'pegawai'; // Nama tabel
    protected $primaryKey = 'id_aktor'; // Primary key
    protected $fillable = ['nama', 'role']; // Kolom yang bisa diisi
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
}
