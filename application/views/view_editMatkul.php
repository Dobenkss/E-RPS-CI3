<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Matkul</title>
</head>

<body>
    <form action="<?= base_url('Matkul/do_editMatkul') ?>/<?= $id; ?>" method="POST">
        <div class="container vh-100">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <b class="text-white">Edit Matkul</b>
                        </div>
                        <select class="form-control" aria-label="Default select example" name="idprd">
                            <option selected>Pilih Prodi</option>
                            <?php foreach ($prodi as $prd) : ?>
                                <option value="<?= $prd['id_prd'] ?>"><?= $prd['nama_prodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="iddsn">
                            <option selected>Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?= $dsn['id_dsn'] ?>"><?= $dsn['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="mb-3">
                            <label for="kodematkul" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" id="kodematkul" aria-describedby="emailHelp" name="kodematkul" value="<?= $tb_matkul['kode_matkul'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="namamatkul" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="namamatkul" name="namamatkul" value="<?= $tb_matkul['nama_matkul'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>