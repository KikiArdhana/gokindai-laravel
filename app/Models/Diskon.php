<?php
<<<<<<< HEAD
// Model: Diskon.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id_promo';
    protected $fillable = ['syarat_pembelian', 'diskon', 'nama_promo'];

}

=======

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
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
