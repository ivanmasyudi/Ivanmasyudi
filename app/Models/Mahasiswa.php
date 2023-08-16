<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'nim';
    protected $allowedFields    = ['nim', 'nama_mhs', 'tempat_lahir', 'tgl_lahir', 'kode_prodi'];

    // Dates
    public function getDataMhs()
    {
        $builder = $this->db->table('mahasiswa');
        $builder->select('mahasiswa.*, prodi.nama_prodi');
        $builder->join('prodi', 'prodi.kode_prodi = mahasiswa.kode_prodi');
        $query = $builder->get();

        return $query->getResult();
    }

    public function getDataMhsById($id)
    {
        $builder = $this->db->table('mahasiswa');
        $builder->select('mahasiswa.*, prodi.nama_prodi');
        $builder->join('prodi', 'prodi.kode_prodi = mahasiswa.kode_prodi');
        $builder->where('nim', $id);
        $query = $builder->get();

        return $query->getRow();
    }
}
