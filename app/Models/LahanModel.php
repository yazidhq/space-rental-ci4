<?php

namespace App\Models;

use CodeIgniter\Model;

class LahanModel extends Model
{
    protected $table = 'lahan';
    protected $primaryKey = 'id_lahan';
    protected $allowedFields =
    [
        'fasilitas_lahan',
        'luas_lahan',
        'kategori_lahan',
        'harga_lahan',
        'gambar_lahan',
        'status_lahan',
    ];
}
