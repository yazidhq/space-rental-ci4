<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields =
    [
        'id_user',
        'id_penyewaan',
        'an_pembayaran',
        'norek_pembayaran',
        'total_harga',
        'bukti_pembayaran',
        'tanggal_pembayaran',
    ];
}
