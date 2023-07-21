<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Fakultas</title>
</head>

<body>
    <form action="<?= base_url('Fakultas/do_tambahFakultas') ?>" method="POST">
        <div class="container vh-100">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <b class="text-white">Tambah Fakultas</b>
                        </div>
                        <div class="mb-3">
                            <label for="namafakultas" class="form-label">Nama Fakultas</label>
                            <input type="text" class="form-control" id="namafakultas" aria-describedby="emailHelp" name="namafakultas">
                        </div>
                        <div class="mb-3">
                            <label for="namadekan" class="form-label">Nama Dekan</label>
                            <input type="text" class="form-control" id="namadekan" name="namadekan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>