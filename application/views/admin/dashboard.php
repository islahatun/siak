<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="float:left">
                <div class="card-body">
                    <h3 class="text-center"> Selamat datang Di ruang Administrasi Kependudukan Desa Banjar. <br> Gunakan Layanan ini Untuk Mengelola Administrasi Kependudukan Anda. Seperti Permohonan Pembuatan Surat Pengantar, Surat Keterangan, Surat Perizinan dan Surat Domisili.</h3>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3" style="float:left">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h3 class="text-center">Presentasi Jumlah Penduduk Desa Banjar</h3>
                        <div class="row">
                            <div class="col">
                                Jumlah Penduduk Perempuan
                            </div>
                            <div class="col">
                                : <?= ($perempuan / 5000) * 100; ?> %
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Jumlah Penduduk Laki-laki
                            </div>
                            <div class="col">
                                : <?= ($laki / 5000) * 100; ?> %
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <h3 class="text-center">Struktur Organisasi</h3>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label">Lurah </label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['lurah']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Sekretaris</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['sekretaris']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Bendahara</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['bendahara']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Kasi Pemerintahan</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kasi_pemerintahan']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Kasi Pelayanan</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kasi_pelayanan']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Kasi Pemberdayaan</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kasi_pemberdayaan']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">kaur Perencanaan</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kaur_perencanaan']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">kaur Keuangan</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kaur_keuangan']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">kaur umum</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kaur_umum']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Kadus 1</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kadus1']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Kadus 2</label>
                                        <div class="col-sm-6">
                                            : <?= $struktur['kadus2']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($artikel as $a) : ?>
            <div class="col">
                <div class="card mb-3" style=" float:left">
                    <div class="card-body">
                        <h2><?= $a['judul']; ?></h2>
                        <img src="<?= base_url('assets/img/artikel/') ?><?= $a['foto'] ?>" alt="" width="300" height="200" class="d-flex p-2" style="float:left">
                        <div class="ml-6">
                            <?= $a['isi']; ?>
                        </div>

                    </div>
                </div>
            </div>
    </div>
<?php endforeach; ?>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->