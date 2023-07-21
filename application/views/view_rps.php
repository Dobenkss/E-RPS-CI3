<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPS</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <a href="<?= base_url('Rps/tambahRps'); ?>" class="btn btn-dark float-right"> Tambah RPS </a>
            </div>
        </div>
    </div>
    <div class="container vh-100">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <b class="text-white">Data RPS</b>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nomor Rps</th>
                                <th scope="col">Kode Mata Kuliah</th>
                                <th scope="col">Nama Mata Kuliah</th>
                                <th scope="col">Tanggal Disusun</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tb_rps as $rps) : ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $rps['nomor_rps']; ?></td>
                                    <td><?php echo $rps['kode_matkul']; ?></td>
                                    <td><?php echo $rps['nama_matkul']; ?></td>
                                    <td><?php echo $rps['tgl_disusun']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Rps/editRps'); ?>/<?= $rps['id_rps']; ?>" class="btn btn-warning"> Edit </a>
                                        <a href="<?= base_url('Rps/do_deleteRps'); ?>/<?= $rps['id_rps']; ?>" class="btn btn-danger"> Hapus </a>
                                        <a href="<?= base_url('Rps/cetakRps'); ?>/<?= $rps['id_rps']; ?>" class="btn btn-primary"> Cetak </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <footer id="footer">
                        <div class="container">
                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                                <a href="https://bootstrapmade.com/"></a>
                            </div>
                        </div>
                    </footer><!-- End  Footer -->
                    <!-- Vendor JS Files -->
                    <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/typed.js/typed.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

                    <!-- Template Main JS File -->
                    <script src="<?= base_url(); ?>assets/js/main.js"></script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>