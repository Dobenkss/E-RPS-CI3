<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">   
                <a href="<?= base_url('Fakultas/tambahFakultas'); ?>" class="btn btn-dark float-right"> Tambah Fakultas </a>
            </div>
        </div>
    </div>
    <div class="container vh-100">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <b class="text-white">Data Fakultas</b>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Fakultas</th>
                                <th scope="col">Nama Dekan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_fakultas as $fakultas) : ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $fakultas['nama_fakultas']; ?></td>
                                    <td> <?php echo $fakultas['nama_dekan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Fakultas/editFakultas'); ?>/<?= $fakultas['id_fk']; ?>" class="btn btn-warning"> Edit </a>
                                        <a href="<?= base_url('Fakultas/do_deleteFakultas'); ?>/<?= $fakultas['id_fk']; ?>" class="btn btn-danger"> Hapus </a>
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