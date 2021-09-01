<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('admin/tambah_penduduk') ?>" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" name="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">NO. KK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kk">
                                <?= form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">NO. NIK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="nik">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select type="text" class="form-control" id="inputnik" name="jk">
                                    <option>LAKI-LAKI</option>
                                    <option>PEREMPUAN</option>
                                </select>
                                <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                                <!-- <input type="text" class="form-control" id="inputnik" name="jk"> -->

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat Lahir </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="tempat_lahir">
                                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tanggal Lahir </label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="inputnik" name="tanggal_lahir">
                                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Rt / rw</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="rt/rw">
                                <?= form_error('rt/rw', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputjk" class="col-sm-4 col-form-label">Desa</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputjk" name="desa">
                                <?= form_error('desa', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Kecamatan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="kecamatan">
                                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Kabupaten</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="kabupaten">
                                <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="agama">
                                <?= form_error('agama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputjk" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputjk" name="kewarganegaraan">
                                <?= form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="status">
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="pekerjaan">
                                <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="pendidikan_terakhir">
                                <?= form_error('pendidikan_terakhir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Golongan Darah</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="gol">
                                <?= form_error('gol', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid text-right">
                    <button type="submit" class="btn btn-dark mb-5">Tambah Data Penduduk</button>
                </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->