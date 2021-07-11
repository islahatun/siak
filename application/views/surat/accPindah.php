<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .table {
            padding: 50px 50px;
        }
    </style>
    <title>Surat</title>
</head>

<body>
    <center>
        <div class="container">
            <table>
                <tr>
                    <td>
                        <img src="<?= base_url('assets/') ?>img/logo.png" width="200" height="200">
                    </td>
                    <td class="text-center font-weight-bold" colspan="2">
                        <div>
                            <h1>PEMERINTAHA KABUPATEN PANDEGLANG KECAMATAN BANJAR
                                DESA BANJAR</h1>
                            <h2> Alamat : Jl.Kadugedong – Kadukacang No. 06 DesaBanjar 42252</h2>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr color="black" width="100%" size="50" color="blue">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="text-center font-weight-bold">
                            <h1><u> SURAT PENGANTAR PINDAH</u></h1>
                        </div>

                        <div class="text-center">
                            <h4>Nomor : <?= $pindah['id_acc']; ?>/ks-564/Ds.2007/III/<?= date('Y') ?></h4>
                        </div>
                        <p></p>
                        <div>
                            <p class="text-justify">
                            <h4>Yang bertandatangan di bawah ini Kepala Desa Banjar Kecamatan Banjar Kabupaten Pandeglang menerangkan dengan sesungguhnya,bahwa ;</h4>
                            </p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Nama</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['nama']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>NO. KK</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['kk']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>NIK</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['nik']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Tempat, Tanggal Lahir</h4>
                                </div>
                                <div class="col">
                                    <h4>: <?= $pindah['tempat_lahir'] . ', ' . $pindah['tanggal_lahir'] ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>Agama</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['agama']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Status Perkawinan</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['status']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>Pekerjaan</h4>
                                </div>
                                <div class="col">
                                    <h4>: <?= $pindah['pekerjaan']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Alamat</h4>
                                </div>
                                <div class="col">
                                    <h4>: <?= $pindah['alamat'] . ', ' . $pindah['rt/rw'] . ', ' . $pindah['desa'] . ', ' . $pindah['kecamatan'] . ', ' . $pindah['kabupaten'] ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Alamat Pindah</h4>
                                </div>
                                <div class="col">
                                    <h4>: <?= $pindah['alamat_pindah'] . ', ' . $pindah['rt/rw_pindah'] . ', ' . $pindah['desa_pindah'] . ', ' . $pindah['kecamatan_pindah'] . ', ' . $pindah['kabupaten/kota_pindah'] ?></h4>
                                </div>
                            </div>
                            <p></p>
                            <p class="text-justify">
                            <h4>Adapun pemohon yang pindah penduduk WNI yang bersangkutan sebagaimana terlampir. Demikian surat pengantar pindah ini dibuat agar digunakan sebagaimana mestinya</h4>
                            </p>
                            <br>
                        </div>
                    </td>
                <tr>
                    <td></td>
                    <td width="250"></td>
                    <td align="center">
                        <h4>Banjar, <?= date('d-m-Y'); ?></h4> <br>
                        <h4> Ub.Kepala Desa Banjar</h4> <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php $lurah =  $this->model_masyarakat->getlurah();
                        ?>
                        <h4><?= $lurah['lurah']; ?></h4>

                    </td>
                </tr>
                </tr>
            </table>
        </div>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <div class="container">
            <table>
                <tr>
                    <td>
                        <img src="<?= base_url('assets/') ?>img/logo.png" width="200" height="200">
                    </td>
                    <td class="text-center font-weight-bold" colspan="2">
                        <div>
                            <h1>PEMERINTAHA KABUPATEN PANDEGLANG KECAMATAN BANJAR
                                DESA BANJAR</h1>
                            <h2> Alamat : Jl.Kadugedong – Kadukacang No. 06 DesaBanjar 42252</h2>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr color="black" width="100%" size="50" color="blue">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="text-center font-weight-bold">
                            <h1><u> SURAT KETERANGAN PINDAH</u></h1>
                        </div>

                        <div class="text-center">
                            <h4>Nomor : <?= $pindah['id_acc']; ?>/ks-564/Ds.2007/III/<?= date('Y') ?></h4>
                        </div>
                        <p></p>
                        <div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Nama</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['nama']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>NIK</h4>
                                </div>
                                <div class="col">
                                    <h4> : <?= $pindah['nik']; ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4> Alasan Pindah</h4>
                                </div>
                                <div class="col">
                                    <h4>: <?= $pindah['alasan_pindah'] ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-4">
                                    <h4>Yang Mengikuti</h4>
                                </div>
                                <div class="col">
                                    <?php foreach ($ikut as $i) : ?>
                                        <h4> : <?= $i['nama_ikut']; ?></h4>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                    </td>
                <tr>
                    <td></td>
                    <td width="250"></td>
                    <td align="center">
                        <h4>Banjar, <?= date('d-m-Y'); ?></h4> <br>
                        <h4> Ub.Kepala Desa Banjar</h4> <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php $lurah =  $this->model_masyarakat->getlurah();
                        ?>
                        <h4><?= $lurah['lurah']; ?></h4>

                    </td>
                </tr>
                </tr>
            </table>
        </div>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>

</html>