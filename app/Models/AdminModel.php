<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'data_tanah';
    protected $primaryKey = 'no_surat';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['no_surat', 'nama', 'no_hak_milik', 'luas', 'no_berkas', 'dftr_isian'];
}
