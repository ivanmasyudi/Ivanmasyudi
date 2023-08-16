<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jadwal;
use App\Models\Prodi;

class Home extends BaseController
{
    protected $mahasiswadb;
    protected $jadwalmhs;
    protected $prodimhs;

    public function __construct()
    {
        $this->mahasiswadb = new Mahasiswa();
        $this->jadwalmhs = new Jadwal();
        $this->prodimhs = new Prodi();
    }
    public function index(): string
    {
        $datamhs = $this->mahasiswadb->getDataMhs();

        $data = [
            'tittle' => "Tampil Mahasiswa",
            'showmhs' => $datamhs
        ];
        return view('mahasiswa/home', $data);
    }

    public function hapus($id)
    {

        $this->mahasiswadb->delete($id);

        return redirect()->to('');
    }

    public function showmatkul($id)
    {
        $datamh = $this->mahasiswadb->getDataMhsById($id);
        $datajadwal = $this->jadwalmhs->getJadwalMhs($id);
        // dd($datajadwal);
        $data = [
            'tittle' => "Show Matkul",
            'datamhs' => $datamh,
            'datajadwal' => $datajadwal
        ];

        return view('mahasiswa/matkul', $data);
    }

    public function edit($id)
    {
        $datamh = $this->mahasiswadb->getDataMhsById($id);
        $dataprodi = $this->prodimhs->findAll();

        $data = [
            'tittle' => "Tampil Mahasiswa",
            'datamh' => $datamh,
            'dataprodi' => $dataprodi
        ];

        return view('mahasiswa/edit_mahasiswa', $data);
    }

    public function prosesedit()
    {

        $nim = $this->request->getVar('nim');
        $nama_mhs = $this->request->getVar('nama');
        $tempat_lahir = $this->request->getVar('tempat_lahir');
        $tgl_lahir = $this->request->getVar('tgl_lahir');
        $kode_prodi = $this->request->getVar('nama_prodi');

        $data = [
            'nim' => $nim,
            'nama_mhs' => $nama_mhs,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'kode_prodi' => $kode_prodi
        ];

        // dd($data);
        // $this->mahasiswadb->set($data);
        // $this->mahasiswadb->where('nim', $nim);
        $this->mahasiswadb->update($nim, $data);

        return redirect()->to('');
    }
}
