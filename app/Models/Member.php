<?php
<<<<<<< HEAD
// Model: Member.php
// Model: Member.php
=======

>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'member';
    protected $primaryKey = 'id_pelanggan';

    protected $fillable = ['nama_pelanggan', 'no_telepon', 'id_level'];

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan');
    }

    public function poin()
    {
        return $this->hasMany(Poin::class, 'id_pelanggan');
    }

    // Ubah metode ini
    public function getTotalPoinAttribute()
    {
        return $this->poin()->sum('jumlah_poin');
    }
=======
    protected $table = 'member'; // Nama tabel di database
    protected $primaryKey = 'id_pelanggan'; // Menetapkan primary key
   

    protected $fillable = [
        'nama_pelanggan',
        'no_telepon',
    ];
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
}
