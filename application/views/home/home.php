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
  <div class="container-fluid mt-2">
    <h1 class="text-center  ">PROFIL DESA BANJAR</h1>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>