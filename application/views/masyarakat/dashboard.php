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
        <div class="col">
            <div class="card mb-3" style="float:left">
                <div class="card-body">
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