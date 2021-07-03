<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan</title>
</head>

<body>
    <div class="container">
        <div class="text-center  ">
            <h1>LAPORAN SURAT KELUAR</h1>
        </div>
        <table class="table mt-5 table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Tanggal Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($surat as $s) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td><?= $s['nama']; ?></td>
                        <td><?= $s['surat']; ?></td>
                        <td><?= date('d F Y', strtotime($s['tanggal'])); ?></td>
                    </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>

</html>