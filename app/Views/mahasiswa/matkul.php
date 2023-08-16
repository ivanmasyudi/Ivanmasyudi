<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-4 mb-2">DETAIL MATAKULIAH YANG DIAMBIL</h4>
        <a href="<?= site_url(); ?>" class="btn btn-success mb-4">Kembali</a>
        <table class="table table-bordered mb-4">
            <tr>
                <th>nim</th>
                <td><?= $datamhs->nim; ?></td>
            </tr>
            <tr>
                <th>nama</th>
                <td><?= $datamhs->nama_mhs; ?></td>
            </tr>
            <tr>
                <th>prodi</th>
                <td><?= $datamhs->nama_prodi; ?></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>id_matkul</td>
                    <td>nama_matkul</td>
                    <td>jumlah_sks</td>
                    <td>dosen_pengajar</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($datajadwal as $datajdwl => $show) { ?>
                    <tr>
                        <td><?= $show->id_matkul; ?></td>
                        <td><?= $show->nama_matkul; ?></td>
                        <td><?= $show->sks; ?></td>
                        <td><?= $show->nama_dosen; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>

</html>