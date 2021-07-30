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
                    <div class="col-9">
                        <h3 class="text-center">Struktur Organisasi</h3>
                        <table class="table table-borderless col-10">
                            <thead>
                                <tr>
                                    <th scope="col">Lurah</th>

                                    <td scope="col">: <?= $struktur['lurah'] ?></td>
                                    <th scope="col">Sekretaris</th>
                                    <td scope="col">:<?= $struktur['sekretaris'] ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Bendahara</th>

                                    <td scope="col">: <?= $struktur['bendahara'] ?></td>
                                    <th scope="col">Kasi Pelayanan</th>
                                    <td scope="col">: <?= $struktur['kasi_pelayanan'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Kasi Pemerintahan</th>

                                    <td scope="col">: <?= $struktur['kasi_pemerintahan'] ?></td>
                                    <th scope="col">Kasi Pemberdayaan</th>
                                    <td scope="col">:<?= $struktur['kasi_pemberdayaan'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Kaur Perencanaan</th>

                                    <td scope="col">: <?= $struktur['kaur_perencanaan'] ?></td>
                                    <th scope="col">Kaur Keuangan</th>
                                    <td scope="col">: <?= $struktur['kaur_keuangan'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Kaur Umum</th>

                                    <td scope="col">: <?= $struktur['kaur_umum'] ?></td>
                                    <th scope="col">Kadus 1</th>
                                    <td scope="col">: <?= $struktur['kadus1'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Kadus 2</th>
                                    <td scope="col">: <?= $struktur['kadus2'] ?></td>
                                    <td scope="col"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <h3 class="text-center">Visi Misi</h3>
                        <div class="col">
                            <label for="">Visi</label>
                            <div class="div"><?= $struktur['visi']; ?></div>
                        </div>
                        <div class="col">
                            <label for="">Misi</label>
                            <div class="div"><?= $struktur['misi']; ?></div>
                        </div>
                    </div>
                </div>
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