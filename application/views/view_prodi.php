<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="<?= base_url('Prodi/tambahProdi'); ?>" class="btn btn-dark float-right"> Tambah Prodi </a>
            </div>
        </div>
    </div>
    <div class="container vh-100">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <b class="text-white">Data Prodi</b>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Fakultas</th>
                                <th scope="col">Nama Prodi</th>
                                <th scope="col">Nama Kaprodi</th>
                                <th scope="col">Nama Sekprodi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_prodi as $prodi) : ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $prodi['nama_fakultas']; ?></td>
                                    <td><?php echo $prodi['nama_prodi']; ?></td>
                                    <td> <?php echo $prodi['nama_kaprodi']; ?></td>
                                    <td><?php echo $prodi['nama_sekprodi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Prodi/editProdi'); ?>/<?= $prodi['id_prd']; ?>" class="btn btn-warning"> Edit </a>
                                        <a href="<?= base_url('Prodi/do_deleteProdi'); ?>/<?= $prodi['id_prd']; ?>" class="btn btn-danger"> Hapus </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>