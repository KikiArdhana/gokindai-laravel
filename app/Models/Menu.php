<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Nama tabel di database
    protected $primaryKey = 'id_item'; // Menetapkan primary key


    protected $fillable = [
        'nama_item',
        'harga',
        'kategori',
    ];
}
