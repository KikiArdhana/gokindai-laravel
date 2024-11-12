<?php

<<<<<<< HEAD
// Model: Level.php
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'level';
    protected $primaryKey = 'id_level';

    protected $fillable = ['nama_level', 'min_poin', 'max_poin'];
}

=======
    protected $table = 'level'; // Nama tabel di database
    protected $primaryKey = 'id_level'; // Menetapkan primary key


    protected $fillable = [
        'nama_level',
        'min_poin',
        'max_poin',
    ];
}
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
