<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title><?= $tittle; ?></title>
</head>
<?php
$artikel = $this->model_masyarakat->get_artikel();
$perempuan = $this->model_masyarakat->perempuan();
$laki = $this->model_masyarakat->laki();
$struktur = $this->model_masyarakat->struktur();
$kampung = $this->model_masyarakat->kampung();
?>

<body>
  <!-- Image and text -->
  <nav class="navbar fixed-top navbar-light bg-dark ">
    <a class="navbar-brand" href="#" style="color:white">
      <img src="<?= base_url('assets/') ?>img/logo.png" width="75" height="75" class="d-inline-block align-center" alt="">
      SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN DESA BANJAR
    </a>
    <div class="justify-content-between">
      <a href="<?= base_url('auth/login'); ?>" class="btn btn-light">Login</a>
    </div>
  </nav>
  <nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url('assets/') ?>img/poto1.png" width="300" height="500" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url('assets/') ?>img/poto2.jpg" width="300" height="500" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url('assets/') ?>img/poto3.jpg" width="300" height="500" alt="Third slide">
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-2">
    <h1 class="text-center  ">PROFIL DESA BANJAR</h1>
  </div>
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="container">
      <center>
        <h4>Presentase Jumlah Penduduk Desa Banjar</h4>
      </center>
      <div class="row">
        <div class="col">
          jumlah penduduk perempuan
        </div>
        <div class="col">
          :<?= ($perempuan / 5000) * 100 ?>%
        </div>
      </div>
      <div class="row">
        <div class="col">
          jumlah penduduk laki-laki
        </div>
        <div class="col">
          :<?= ($laki / 5000) * 100 ?>%
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <center>
            <h4>Staf Keluarahan Desa Banjar</h4>
          </center>
          <div class="row">
            <div class="col">Lurah </div>
            <div class="col">: <?= $struktur['lurah']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Sekretaris </div>
            <div class="col">: <?= $struktur['sekretaris']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Bendahara </div>
            <div class="col">: <?= $struktur['bendahara']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kasi Pelayanan </div>
            <div class="col">: <?= $struktur['kasi_pelayanan']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kasi Pemerintahan </div>
            <div class="col">: <?= $struktur['kasi_pemerintahan']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kasi Pemberdayaan </div>
            <div class="col">: <?= $struktur['kasi_pemberdayaan']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kaur Perencanaan </div>
            <div class="col">: <?= $struktur['kaur_perencanaan']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kaur Keuangan </div>
            <div class="col">: <?= $struktur['kaur_keuangan']; ?> </div>

          </div>
          <div class="row">
            <div class="col">Kaur Umum </div>
            <div class="col">: <?= $struktur['kaur_umum']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kadus1 </div>
            <div class="col">: <?= $struktur['kadus1']; ?> </div>
          </div>
          <div class="row">
            <div class="col">Kadus2</div>
            <div class="col">: <?= $struktur['kadus2']; ?> </div>
          </div>
        </div>
        <div class="col">
          <div class="col">
            <h3 class="text-center">Visi Misi</h3>
            <div class="col">
              <label for="">Visi</label>
              <div class="div"><?= $struktur['visi']; ?></div>
            </div>
            <div class="col">
              <label for="">Misi</label>
              <div class="div"><?= $struktur['misi']; ?></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3">
        <center>
          <h4>Daftar Kampung Desa Banjar</h4>
        </center>
      </div>
      <?php foreach ($kampung as $k) : ?>
        <div><?= $k['kampung']; ?></div>
      <?php endforeach; ?>
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>