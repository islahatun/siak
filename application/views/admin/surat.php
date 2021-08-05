<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="col-4 mt-3">
            <a href="<?= base_url('admin/laporan/') ?> " class="btn btn-primary"><i class="fa fa-print"> CETAK LAPORAN</i></a>
        </div>
        <div class="scroll1">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal Pengajuan</th>
                            <th scope="col">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($surat as $s) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['surat']; ?></td>
                                <td><?= $s['tanggal']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/print/') ?><?= $s['id_acc'] ?> " class="btn btn-primary"><i class="fa fa-print"> CETAK</i></a>
                                </td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>