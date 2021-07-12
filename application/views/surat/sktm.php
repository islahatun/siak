<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('surat/surat_sktm') ?>" method="post">
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col">

                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" name="nama" value="<?= $masyarakat['nama'] ?>" readonly>
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
                                <input type="text" class="form-control" id="inputnik" value="<?= $masyarakat['tempat_lahir'] . ", " . date('d F Y', strtotime($masyarakat['tanggal_lahir'])); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" nama="pekerjaan" value="<?= $masyarakat['pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alamat" value="<?= $masyarakat['alamat'] . ', ' . $masyarakat['rt/rw'] . ', ' . $masyarakat['desa'] . ', ' . $masyarakat['kecamatan'] . ' ' . $masyarakat['kabupaten'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alasan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alasan">
                                <?= form_error('alasan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="tanggal" value="<?= date('y/m/d') ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="surat" value="sktm" hidden>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="container-fluid">
                    <a href="<?= base_url('admin/print/') ?><?= $surat['id_acc'] ?>" class="btn btn-dark mb-5" type="submit">print</a>
                </span>
                <span class="container-fluid text-right">
                    <button class="btn btn-dark mb-5" type="submit">Kirim</button>
                </span>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->