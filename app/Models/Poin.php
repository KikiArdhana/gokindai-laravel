<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;

    protected $table = 'poin'; // Nama tabel di database
    protected $primaryKey = 'id_poin'; // Menetapkan primary key


    protected $fillable = [
        'jumlah_poin',
        'tanggal_diberikan',
    ];
}
