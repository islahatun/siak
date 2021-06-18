<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="card">
    <div class="card-body">
      <form method="post" action="<?= base_url('surat/surat_ktp') ?>">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
          <div class="col">
            <div class="form-group row">
              <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputnama" value="<?= $masyarakat['nama'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputnik" class="col-sm-4 col-form-label">N0. NIK</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputnik" name="nik" value="<?= $masyarakat['nik'] ?>" readonly>
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
              <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputnik" name="alamat" value="<?= $masyarakat['alamat'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputnik" class="col-sm-4 col-form-label">Rt / rw</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputnik" name="rt/rw" value="<?= $masyarakat['rt/rw'] ?>" readonly>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group row">
              <label for="inputjk" class="col-sm-4 col-form-label">Desa</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputjk" name="desa" value="<?= $masyarakat['desa'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Kecamatan</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="kec" value="<?= $masyarakat['kecamatan'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Agama</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="agama" value="<?= $masyarakat['agama'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Status Perkawinan</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="status" value="<?= $masyarakat['status'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Pekerjaan</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="pekerjaan" value="<?= $masyarakat['pekerjaan'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Golongan Darah</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="goldar" value="<?= $masyarakat['gol'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="nik" value="<?= $masyarakat['nik'] ?>" hidden>
                <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="tanggal" value="<?= date('d/m/y') ?>" hidden>
                <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword" name="surat" value="ktp" hidden>
                <?= form_error('surat', '<small class="text-danger pl-3">', ' </small>') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-right">
          <button class="btn btn-dark mb-5" type="submit">Kirim</button>
        </div>
      </form>

    </div>
  </div>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->