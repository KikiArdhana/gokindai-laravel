<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level'; // Nama tabel di database
    protected $primaryKey = 'id_level'; // Menetapkan primary key


    protected $fillable = [
        'nama_level',
        'min_poin',
        'max_poin',
    ];
}
