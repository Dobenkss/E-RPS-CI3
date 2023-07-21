<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Dosen</title>
</head>

<body>
  <form action="<?php echo base_url('Dosen/do_editDosen') ?>/<?php echo $id; ?>" method="POST">
    <div class="container vh-100">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-dark">
              <b class="text-white">Edit Dosen</b>
            </div>
            <div class="mb-3">
              <label for="nipDosen" class="form-label">NIP</label>
              <input type="text" class="form-control" id="nipDosen" aria-describedby="emailHelp" name="nipDosen" value="<?= $dosen['nip_doosen'] ?>">
            </div>
            <div class="mb-3">
              <label for="namaDosen" class="form-label">Nama Dosen</label>
              <input type="text" class="form-control" id="namaDosen" name="namaDosen" value="<?= $dosen['nama'] ?>">
            </div>
            <div class="mb-3">
              <label for="kelaminDosen" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control" id="kelaminDosen" name="kelaminDosen" value="<?= $dosen['kelamin'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>