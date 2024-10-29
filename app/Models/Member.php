<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member'; // Nama tabel di database
    protected $primaryKey = 'id_pelanggan'; // Menetapkan primary key
   

    protected $fillable = [
        'nama_pelanggan',
        'no_telepon',
    ];
}
