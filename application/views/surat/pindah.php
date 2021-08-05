<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('surat/surat_pindah') ?>" method="post">
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" nama="nama" value="<?= $masyarakat['nama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="jk" value="<?= $masyarakat['jk'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="ttl" value="<?= $masyarakat['tempat_lahir'] . ", " . date('d F Y', strtotime($masyarakat['tanggal_lahir'])); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kewarganegaraan" value="<?= $masyarakat['kewarganegaraan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="agama" value="<?= $masyarakat['agama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" nama="status_perkawinan" value="<?= $masyarakat['status'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="pekerjaan" value="<?= $masyarakat['pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pendidikan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="pendidikan" value="<?= $masyarakat['pendidikan_terakhir'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat Asal</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alamat_asal" value="<?= $masyarakat['alamat'] . ', ' . $masyarakat['rt/rw'] . ', ' . $masyarakat['desa'] . ', ' . $masyarakat['kecamatan'] . ' ' . $masyarakat['kabupaten'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputjk" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputjk" name="nik" value="<?= $masyarakat['nik'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Pindah ke</label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="alamat_pindah">
                                        <?= form_error('alamat_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Rt/Rw</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="rt/rw_pindah">
                                        <?= form_error('rt/rw_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kel/Desa</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="desa_pindah">
                                        <?= form_error('desa_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kecamatan</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="kecamatan_pindah">
                                        <?= form_error('kecamatan_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kab/Kota</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="kabupaten/kota_pindah">
                                        <?= form_error('kabupaten/kota_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Provinsi</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="provinsi_pindah">
                                        <?= form_error('provinsi_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alasan Pindah</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="alasan_pindah">
                                <?= form_error('alasan_pindah', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="surat" hidden value="pindah">
                            <?= form_error('surat', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                            <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="tanggal" hidden value="<?= date('y/m/d') ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                </div>
        </div>
        <span class="container-fluid text-right">
            <button class="btn btn-dark mb-5" type="submit">Kirim</button>
        </span>
        </form>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <form action="<?= base_url('surat/ikut_pindah') ?>" method="post">
                        <div class="form-group row">
                            <div class="col">
                                <label for="inputnama" class="col-sm-4 col-form-label">Nama Ikut Pindah</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputnama" name="nama_ikut" placeholder="Masukkan Nama Lengkap">
                                    <?= form_error('nama_ikut', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputnama" name="nik_surat" value="<?= $masyarakat['nik'] ?>" hidden>
                                    <?= form_error('nik_surat', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark mb-5" type="submit">simpan</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid">
                    <div class="col-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $j = 1; ?>
                                <?php foreach ($ikut as $i) : ?>
                                    <tr>
                                        <th scope="row"><?= $j; ?></th>
                                        <td><?= $i['nama_ikut']; ?></td>

                                    </tr>
                            </tbody>
                            <?php $j++; ?>
                        <?php endforeach ?>
                        </table>
                        <h3>Riwayat Pengiriman Surat</h3>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal Pengajuan</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($surat as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['tanggal']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/print/') ?><?= $s['id_acc'] ?> " class="btn btn-primary"><i class="fa fa-print"> CETAK</i></a>
                                        </td>
                                    </tr>
                            </tbody>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>


            </div>
        </div>

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Button trigger modal -->