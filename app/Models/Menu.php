<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $fillable = ['nama_item', 'harga', 'kategori']; // Kolom yang bisa diisi
}