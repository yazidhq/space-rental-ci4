<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaanModel extends Model
{
    protected $table = 'penyewaan';
    protected $primaryKey = 'id_penyewaan';
    protected $allowedFields =
    [
        'id_user',
        'id_lahan',
        'kategori_lahan',
        'tanggal_penyewaan',
        'lama_penyewaan',
        'npwp',
        'ktp',
        'status_penyewaan',
    ];
}
