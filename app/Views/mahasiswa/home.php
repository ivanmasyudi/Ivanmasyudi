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
        <h1 class="text-center mt-4 mb-2">TAMPIL MAHASISWA</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>nim</td>
                    <td>nama_mhs</td>
                    <td>tempat_lahir</td>
                    <td>tgl_lahir</td>
                    <td>prodi</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($showmhs as $smhs => $show) { ?>
                    <tr>
                        <td><?= $show->nim; ?></td>
                        <td><?= $show->nama_mhs; ?></td>
                        <td><?= $show->tempat_lahir; ?></td>
                        <td><?= $show->tgl_lahir; ?></td>
                        <td><?= $show->nama_prodi; ?></td>
                        <td>
                            <a href="<?= site_url(); ?>mahasiswa/edit/<?= $show->nim; ?>" class="btn btn-warning">EDIT</a>
                            <a href="<?= site_url(); ?>mahasiswa/delete/<?= $show->nim; ?>" class="btn btn-danger">HAPUS</a>
                            <a href="<?= site_url(); ?>mahasiswa/showmatkul/<?= $show->nim; ?>" class="btn btn-primary">SHOW MATKUL</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>

</html>