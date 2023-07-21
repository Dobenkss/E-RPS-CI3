<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dosen </title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <a href="<?= base_url('dosen/tambahDosen'); ?>" class="btn btn-dark float-right"> Tambah Dosen </a>
            </div>
        </div>
    </div>
    <div class="container vh-100">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <b class="text-white">Data Dosen</b>
                    </div>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">NIP </th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dosen as $dsn) : ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $dsn['nip_doosen']; ?></td>
                                    <td> <?php echo $dsn['nama']; ?></td>
                                    <td><?php echo $dsn['kelamin']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Dosen/editDosen'); ?>/<?= $dsn['id_dsn']; ?>" class="btn btn-warning"> Edit </a>
                                        <a href="<?= base_url('Dosen/do_deleteDosen'); ?>/<?= $dsn['id_dsn']; ?>" class="btn btn-danger"> Hapus </a>
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