<?php

<<<<<<< HEAD
// Model: Menu.php
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'menu';
    protected $primaryKey = 'id_item';

    protected $fillable = ['nama_item', 'harga', 'kategori'];
=======
    protected $table = 'menu'; // Nama tabel di database
    protected $primaryKey = 'id_item'; // Menetapkan primary key


    protected $fillable = [
        'nama_item',
        'harga',
        'kategori',
    ];
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
}
