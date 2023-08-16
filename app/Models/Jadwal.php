<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id_jadwal';
    protected $allowedFields    = ['id_jadwal', 'id_matkul', 'id_dosen', 'nim'];

    public function getJadwalMhs($id)
    {
        $builder = $this->db->table('jadwal');
        $builder->select('matakuliah.*, dosen.nama_dosen, mahasiswa.nim');
        $builder->join('mahasiswa', 'mahasiswa.nim = jadwal.nim');
        $builder->join('dosen', 'dosen.id_dosen = jadwal.id_dosen');
        $builder->join('matakuliah', 'matakuliah.id_matkul = jadwal.id_matkul');
        $builder->where('jadwal.nim', $id);
        $query = $builder->get();

        return $query->getResult();
    }
}
