<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi</title>
</head>

<body>
    <form action="<?= base_url('Prodi/do_editProdi') ?>/<?= $id; ?>" method="POST">
        <div class="container vh-100">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <b class="text-white">Edit Prodi</b>
                        </div>
                        <select class="form-control" aria-label="Default select example" name="idFk">
                            <option selected>Pilih Fakultas</option>
                            <?php foreach ($fakultas as $fk) : ?>
                                <option value="<?= $fk['id_fk'] ?>"><?= $fk['nama_fakultas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="mb-3">
                            <label for="namaprodi" class="form-label">Nama Prodi</label>
                            <input type="text" class="form-control" id="namaprodi" aria-describedby="emailHelp" name="namaprodi" value="<?= $tb_prodi['nama_prodi'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="namakaprodi" class="form-label">Nama Kaprodi</label>
                            <input type="text" class="form-control" id="namakaprodi" name="namakaprodi" value="<?= $tb_prodi['nama_kaprodi'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="namadekprodi" class="form-label">Nama Sekprodi</label>
                            <input type="text" class="form-control" id="namasekprodi" name="namasekprodi" value="<?= $tb_prodi['nama_sekprodi'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>