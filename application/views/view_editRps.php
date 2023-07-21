<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit RPS</title>
</head>

<body>
    <form action="<?= base_url('Rps/do_editRps') ?>/<?= $id ?>" method="POST">
        <div class="container vh-100">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <b class="text-white">Edit RPS</b>
                        </div>
                        <select class="form-control" aria-label="Default select example" name="idfk">
                            <option selected>Pilih Dekan</option>
                            <?php foreach ($fakultas as $fk) : ?>
                                <option value="<?= $fk['id_fk'] ?>"><?= $fk['nama_dekan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="idprd">
                            <option selected>Pilih Prodi</option>
                            <?php foreach ($prodi as $prd) : ?>
                                <option value="<?= $prd['id_prd'] ?>"><?= $prd['nama_prodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="idprd">
                            <option selected>Pilih Kaprodi</option>
                            <?php foreach ($prodi as $prd) : ?>
                                <option value="<?= $prd['id_prd'] ?>"><?= $prd['nama_kaprodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="idprd">
                            <option selected>Pilih Sekprodi</option>
                            <?php foreach ($prodi as $prd) : ?>
                                <option value="<?= $prd['id_prd'] ?>"><?= $prd['nama_sekprodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="idmk">
                            <option selected>Pilih Mata Kuliah</option>
                            <?php foreach ($matkul as $mk) : ?>
                                <option value="<?= $mk['id_matkul'] ?>"><?= $mk['nama_matkul'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control" aria-label="Default select example" name="iddsn">
                            <option selected>Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?= $dsn['id_dsn'] ?>"><?= $dsn['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="mb-3">
                            <label for="norps" class="form-label">Nomor Rps</label>
                            <input type="text" class="form-control" id="norps" aria-describedby="emailHelp" name="norps" value="<?= $tb_rps['nomor_rps'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="berlaku" class="form-label">Tanggal Berlaku</label>
                            <input type="text" class="form-control" id="berlaku" aria-describedby="emailHelp" name="berlaku" value="<?= $tb_rps['tgl_berlaku'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disusun" class="form-label">Tanggal Disusun</label>
                            <input type="text" class="form-control" id="disusun" aria-describedby="emailHelp" name="disusun" value="<?= $tb_rps['tgl_disusun'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="rev" class="form-label">Revisi</label>
                            <input type="text" class="form-control" id="rev" aria-describedby="emailHelp" name="rev" value="<?= $tb_rps['revisi'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ident" class="form-label">identitas</label>
                            <textarea type="text" class="form-control" id="ident" aria-describedby="emailHelp" name="ident">
        <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
            <tr>
                <td>
                    Program Studi
                </td>
                <td style="width: 20%"></td>
                <td>
                    Semester
                </td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td>
                    Nama & Kode Mata Kuliah
                </td>
                <td style="width: 20%"> </td>
                <td>
                    Bobot SKS
                </td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td rowspan="3">
                    Detail Prosentasi Penilaian
                </td>
                <td rowspan="3" style="width: 20%">
            <!--  -->
                </td>
                <td>
                    Dosen Pengampu
                </td>
                <td colspan="5">
                                                    
            <!--  -->
        <br>
            <!-- NIK:  -->
        <br>
                                                        
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    Klasifikasi Nilai
                </td>
                <td style="text-align: center;">
                    >80
                </td>
                <td style="text-align: center;">
                    >60 & < 80 
                </td>
                <td style="text-align: center;">
                    >40 & < 60 
                </td>
                <td style="text-align: center;">
                    >20 & < 40 
                </td>
                <td style="text-align: center;">
                    < 20 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    A
                </td>
                <td style="text-align: center;">
                    B
                </td>
                <td style="text-align: center;">
                     C
                </td>
                <td style="text-align: center;">
                    D
                </td>
                 <td style="text-align: center;">
                    E
                </td>
            </tr>
        </table> 
        </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambaran" class="form-label">Gambaran Umum</label>
                            <textarea type="text" class="form-control" id="gambaran" aria-describedby="emailHelp" name="gambaran" value="<?= $tb_rps['gambaran_umum'] ?>"> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="capaian" class="form-label">Capaian Pembelajaran</label>
                            <textarea type="text" class="form-control" id="capaian" aria-describedby="emailHelp" name="capaian" value="<?= $tb_rps['capaian_pem'] ?>"> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="prasyarat" class="form-label">Prasyarat Pengetahuan</label>
                            <textarea type="text" class="form-control" id="prasyarat" name="prasyarat" value="<?= $tb_rps['prasyarat_pengetahuan'] ?>"> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit Pembelajaran</label>
                            <textarea type="text" class="form-control" id="unit" name="unit">
        <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
            <thead>
                <tr>
                    <td>Kemampuan Akhir Yang Diharapkan</td>
                    <td>Indikator</td>
                    <td>Bahan Kajian</td>
                    <td>Metode Pembelajaran</td>
                    <td>Waktu</td>
                    <td>Metode Penilaian</td>
                    <td>Bahan Ajar</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="penilaian" class="form-label">Tugas Penilaian</label>
                            <textarea type="text" class="form-control" id="penilaian" name="penilaian">
                            <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
            <thead>
                <tr>
                <td>Tugas/Aktivitas</td>
                    <td>Kemampuan Akhir</td>
                    <td>Waktu</td>
                    <td>Bobot</td>
                    <td>Kriteria</td>
                    <td>Indikator</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ref" class="form-label">Referensi</label>
                            <textarea type="text" class="form-control" id="ref" name="ref" value="<?= $tb_rps['referensi'] ?>"> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rencana" class="form-label">Rencana Pembelajaran</label>
                            <textarea type="text" class="form-control" id="rencana" name="rencana">
                            <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
            <thead>
                <tr>
                    <td>Minggu Pertama</td>
                    <td>Kemampuan Akhir Yang Diharapkan</td>
                    <td>Indikator</td>
                    <td>Topik dan Subtopik</td>
                    <td>Aktivitas dan Strategi Pembelajaran</td>
                    <td>Waktu</td>
                    <td>Penilaian</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.replace('ident');
        CKEDITOR.replace('unit');
        CKEDITOR.replace('penilaian');
        CKEDITOR.replace('rencana');
    </script>
</body>

</html>