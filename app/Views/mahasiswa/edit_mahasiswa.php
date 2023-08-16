<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tittle; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-4 mb-2">EDIT DATA MAHASISWA</h4>
        <a href="<?= site_url(); ?>" class="btn btn-success mb-4">Kembali</a>
        <form action="<?= site_url(); ?>mahasiswa/prosesedit" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $datamh->nim; ?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $datamh->nama_mhs; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $datamh->tempat_lahir; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $datamh->tgl_lahir; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_prodi" class="form-label">Prodi</label>
                <select name="nama_prodi" id="nama_prodi" class="form-control">
                    <option><?= $datamh->nama_prodi; ?></option>
                    <?php foreach ($dataprodi as $datpod => $datapro) { ?>
                        <option value="<?= $datapro['kode_prodi']; ?>"><?= $datapro['nama_prodi']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>

</html>