<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai'; // Nama tabel
    protected $primaryKey = 'id_aktor'; // Primary key
    protected $fillable = ['nama', 'role']; // Kolom yang bisa diisi
}
