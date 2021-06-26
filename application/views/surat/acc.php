<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <center>
        <table width="600" heigh="935">
            <tr>
                <td>
                    <img src="<?= base_url('assets/') ?>img/logo.png" width="100" height="100">
                </td>
                <td class="text-center font-weight-bold" colspan="2">
                    <div>
                        PEMERINTAHA KABUPATEN PANDEGLANG KECAMATAN BANJAR
                        DESA BANJAR
                    </div>
                    Alamat : Jl.Kadugedong – Kadukacang No. 06 DesaBanjar 42252
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr color="black" width="100%" size="90%" noshade>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="text-center font-weight-bold">
                        <u> SURAT KETERANGAN</u>
                    </div>

                    <div class="text-center">
                        Nomor : <?= $surat['id_surat']; ?>/KS-246/Ds.2007/III/<?= date('Y')?>
                    </div>
                    <p></p>
                    <div>
                        <p class="text-justify">
                            Yang bertandatangan di bawah ini Kepala Desa Banjar <br> Kecamatan Banjar Kabupaten Pandeglang menerangkan dengan sesungguhnya,bahwa ;
                        </p>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-4">
                                Nama
                            </div>
                            <div class="col">
                                : <?= $surat['nama']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                NIK
                            </div>
                            <div class="col">
                                : <?= $surat['nik']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Tempat, Tanggal Lahir
                            </div>
                            <div class="col">
                                : <?= $surat['tempat_lahir'] . ', ' . $surat['tanggal_lahir'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Agama
                            </div>
                            <div class="col">
                                : <?= $surat['agama']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Status Perkawinan
                            </div>
                            <div class="col">
                                : <?= $surat['status']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Pekerjaan
                            </div>
                            <div class="col">
                                : <?= $surat['pekerjaan']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Alamat
                            </div>
                            <div class="col">
                                : <?= $surat['alamat'] . ', ' . $surat['rt/rw'] . ', ' . $surat['desa'] . ', ' . $surat['kecamatan'] . ' ' . $surat['kabupaten'] ?>
                            </div>
                        </div>
                        <p></p>
                        <p class="text-justify">
                            Nama tersebut di atas adalah benar penduduk Desa Banjar Kecamatan Banjar Kabupaten Pandeglang, yang bersangkutan akan melaksanakan perekaman KTP el
                            Demikian surat keterangan ini di buat dengan sebenarnya untuk diketahui dan dipergunakan sebagaimana mestinya,
                        </p>
                    </div>
                </td>
            <tr>
                <td></td>
                <td width="250"></td>
                <td align="center">
                    Banjar <?= date('D,M Y'); ?> <br>
                    Ub.Kepala Desa Banjar <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    Ade Rusyadi

                </td>
            </tr>
            </tr>
        </table>
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