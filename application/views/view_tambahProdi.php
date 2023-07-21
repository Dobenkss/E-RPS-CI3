<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Prodi</title>
</head>

<body>
  <form action="<?= base_url('Prodi/do_tambahProdi') ?>" method="POST">
    <div class="container vh-100">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-dark">
              <b class="text-white">Tambah Prodi</b>
            </div>
            <select class="form-control" aria-label="Default select example" name="idFk">
              <option selected>Pilih Fakultas</option>
              <?php foreach ($fakultas as $fk) : ?>
                <option value="<?= $fk['id_fk'] ?>"><?= $fk['nama_fakultas'] ?></option>
              <?php endforeach; ?>
            </select>
            <div class="mb-3">
              <label for="namaprodi" class="form-label">Nama Prodi</label>
              <input type="text" class="form-control" id="namaprodi" aria-describedby="emailHelp" name="namaprodi">
            </div>
            <div class="mb-3">
              <label for="namakaprodi" class="form-label">Nama Kaprodi</label>
              <input type="text" class="form-control" id="namakaprodi" name="namakaprodi">
            </div>
            <div class="mb-3">
              <label for="namasekprodi" class="form-label">Nama Sekprodi</label>
              <input type="text" class="form-control" id="namasekprodi" name="namasekprodi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>