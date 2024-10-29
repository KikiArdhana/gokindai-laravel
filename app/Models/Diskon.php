<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskon'; // Nama tabel di database
    protected $primaryKey = 'id_promo'; // Menetapkan primary key

    protected $fillable = [
        'syarat_pembelian',
        'diskon',
        'nama_promo',
    ];
}
