<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('admin/admin') ?>" method="post">
                <?= $this->session->flashdata('message') ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" name="nama" value="<?= $admin['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">User Id</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" name="nik" value="<?= $admin['nik'] ?>">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">password</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="sandi">
                                <?= form_error('sandi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Konfirmasi Sandi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="sandi2">
                                <?= form_error('sandi2', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid text-right">
                    <button type="submit" class="btn btn-dark mb-5">Ubah Data Admin</button>
                </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->