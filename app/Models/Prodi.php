<?php

namespace App\Models;

use CodeIgniter\Model;

class Prodi extends Model
{
    protected $table            = 'prodi';
    protected $primaryKey       = 'kode_prodi';
    protected $allowedFields    = ['kode_prodi', 'nama_prodi'];
}
