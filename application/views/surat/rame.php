<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('surat/surat_rame') ?>" method="post">
                <?= $this->session->flashdata('message');
                ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" hidden>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" value="<?= $masyarakat['nama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['nik'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['tempat_lahir'] . ", " . date('d F Y', strtotime($masyarakat['tanggal_lahir'])); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tujuan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="maksud">
                                <?= form_error('maksud', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Hiburan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="hiburan">
                                <?= form_error('hiburan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="inputnik" name="tanggal_pelaksanaan">
                                <?= form_error('tanggal_pelaksanaan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Waktu</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" id="inputnik" name="waktu">
                                <?= form_error('waktu', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="tempat">
                                <?= form_error('tempat', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="surat" value="rame" hidden>
                                <?= form_error('surat', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="tanggal" value="<?= date('y/m/d') ?>" hidden>
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                                <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                    </div>

                </div>
                <span class="container-fluid text-right">
                    <button class="btn btn-dark mb-5" type="submit">Kirim</button>
                </span>
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