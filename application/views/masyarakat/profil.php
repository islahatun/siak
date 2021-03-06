<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-body">
            <?= form_open_multipart('masyarakat/profil') ?>
            <?= $this->session->flashdata('message') ?>
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnama" name="nama" value="<?= $masyarakat['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">NO. KK</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnik" name="kk" value="<?= $masyarakat['kk'] ?>">
                            <?= form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">NO. NIK</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnik" name="nik" value="<?= $masyarakat['nik'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="inputnik" name="jk">
                                <option><?= $masyarakat['jk'] ?></option>
                                <option>LAKI-LAKI</option>
                                <option>PEREMPUAN</option>
                            </select>
                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                            <!-- <input type="text" class="form-control" id="inputnik" name="jk" value="<?= $masyarakat['jk'] ?>"> -->

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">Tempat Lahir </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnik" name="tempat_lahir" value="<?= $masyarakat['tempat_lahir'] ?>">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">Tanggal Lahir </label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="inputnik" name="tanggal_lahir" value="<?= $masyarakat['tanggal_lahir'] ?>">
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnik" name="alamat" value="<?= $masyarakat['alamat'] ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnik" class="col-sm-4 col-form-label">Rt / rw</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnik" name="rt/rw" value="<?= $masyarakat['rt/rw'] ?>">
                            <?= form_error('rt/rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjk" class="col-sm-4 col-form-label">Desa</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputjk" name="desa" value="<?= $masyarakat['desa'] ?>">
                            <?= form_error('desa', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Kecamatan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPassword" name="kecamatan" value="<?= $masyarakat['kecamatan'] ?>">
                            <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Kabupaten</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPassword" name="kabupaten" value="<?= $masyarakat['kabupaten'] ?>">
                            <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="inputPassword" name="agama">
                                <option><?= $masyarakat['agama'] ?></option>
                                <option>ISLAM</option>
                                <option>KRISTEN</option>
                                <option>HINDU</option>
                                <option>BUDHA</option>
                                <option>KONGUCU</option>
                            </select>
                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>') ?>
                            <!-- <input type="text" class="form-control" id="inputPassword" name="agama" value="<?= $masyarakat['agama'] ?>"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjk" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputjk" name="kewarganegaraan" value="<?= $masyarakat['kewarganegaraan'] ?>">
                            <?= form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="inputPassword" name="status">
                                <option>BELUM MENIKAH</option>
                                <option>MENIKAH</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                            <!-- <input type="text" class="form-control" id="inputPassword" name="status" value="<?= $masyarakat['status'] ?>"> -->

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Pekerjaan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPassword" name="pekerjaan" value="<?= $masyarakat['pekerjaan'] ?>">
                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPassword" name="pendidikan_terakhir" value="<?= $masyarakat['pendidikan_terakhir'] ?>">
                            <?= form_error('pendidikan_terakhir', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Golongan Darah</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="inputPassword" name="gol">
                                <option><?= $masyarakat['gol'] ?></option>
                                <option>A</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                            <?= form_error('gol', '<small class="text-danger pl-3">', '</small>') ?>
                            <!-- <input type="text" class="form-control" id="inputPassword" name="gol" value="<?= $masyarakat['gol'] ?>"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <img src="<?= base_url('assets/img/profil/') . $masyarakat['gambar']; ?>" alt="" class="img-thumbnail">
                        </div>
                        <div class="col">
                            <div class="custom-file ">
                                <input type="file" class="custom-file-input" name="gambar" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid text-right">
                <button type="submit" class="btn btn-dark mb-5">Ubah Data Penduduk</button>
            </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->