<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields =
    [
        'nama_user',
        'nik_user',
        'email_user',
        'wa_user',
        'alamat_user',
        'jkel_user',
        'username_user',
        'password_user'
    ];
}
