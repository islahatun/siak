<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('surat/surat_keterangan_usaha') ?>">
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnama" hidden>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" value="<?= $masyarakat['nama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">No. NIK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['nik'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['jk'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['tempat_lahir'] . ", " . date('d F Y', strtotime($masyarakat['tanggal_lahir'])); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['kewarganegaraan'] ?>" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['agama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputjk" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputjk" value="<?= $masyarakat['pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" value="<?= $masyarakat['alamat'] . ', ' . $masyarakat['rt/rw'] . ', ' . $masyarakat['desa'] . ', ' . $masyarakat['kecamatan'] . ' ' . $masyarakat['kabupaten'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Usaha</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="jenis_usaha">
                                <?= form_error('jenis_usaha', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tempat Usaha</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="tempat_usaha">
                                <?= form_error('tempat_usaha', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="surat" value="usaha" hidden>
                            <?= form_error('surat', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                            <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" id="inputPassword" name="tanggal" value="<?= date('y/m/d') ?>" hidden>
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                </div>
                <span class="container-fluid text-right">
                    <button class="btn btn-dark mb-5" type="submit">Kirim</button>
                </span>
        </div>
        </form>
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

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->