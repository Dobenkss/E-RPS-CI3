<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matkul</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <a href="<?= base_url('Matkul/tambahMatkul'); ?>" class="btn btn-dark float-right"> Tambah Mata Kuliah </a>
            </div>
        </div>
    </div>
    <div class="container vh-100">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <b class="text-white">Data Matkul</b>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Prodi</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Kode Mata Kuliah</th>
                                <th scope="col">Nama Mata Kuliah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_matkul as $matkul) : ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $matkul['nama_prodi']; ?></td>
                                    <td><?php echo $matkul['nama']; ?></td>
                                    <td> <?php echo $matkul['kode_matkul']; ?></td>
                                    <td><?php echo $matkul['nama_matkul']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Matkul/editMatkul'); ?>/<?= $matkul['id_matkul']; ?>" class="btn btn-warning"> Edit </a>
                                        <a href="<?= base_url('Matkul/do_deleteMatkul'); ?>/<?= $matkul['id_matkul']; ?>" class="btn btn-danger"> Hapus </a>
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