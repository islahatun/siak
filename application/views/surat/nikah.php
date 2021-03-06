<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('surat/surat_nikah') ?>" method="post">
                <?= $this->session->flashdata('message') ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" value="<?= $masyarakat['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['jk'] ?>">
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
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['pekerjaan'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['alamat'] . ', ' . $masyarakat['rt/rw'] . ', ' . $masyarakat['desa'] . ', ' . $masyarakat['kecamatan'] . ' ' . $masyarakat['kabupaten'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">kewarganegaraan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['kewarganegaraan'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Nama Pasangan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="pasangan">
                                <?= form_error('pasangan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat Pasangan</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" id="inputnik" name="alamat_pasangan"></textarea>
                                <?= form_error('alamat_pasangan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="surat" hidden value="nikah">
                                <?= form_error('surat', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="tanggal" hidden value="<?= date('y/m/d') ?>">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="nik" hidden value="<?= $masyarakat['nik'] ?>">
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