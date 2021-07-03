<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <div>
                <a href="<?= base_url('admin/tambah_penduduk') ?>" class="btn btn-dark mb-3">Tambah Penduduk</a>
            </div>
            <div class="scroll">
                <?= $this->session->flashdata('message') ?>
                <table class="table ">
                    <thead>
                        <tr class="bg-dark text-center" width="100px">
                            <th scope="col">#</th>
                            <th scope="col">No. KK</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama_Lengkap</th>
                            <th scope="col">Tempat_Lahir</th>
                            <th scope="col">Tanggal_Lahir</th>
                            <th scope="col">Jenis_Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Golongan_Darah</th>
                            <th scope="col">Kewarganegaraan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Rt/Rw</th>
                            <th scope="col">Desa</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Status_Menikah</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($masyarakat as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['kk'] ?></td>
                                <td><?= $m['nik'] ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td><?= $m['tempat_lahir'] ?></td>
                                <td><?= $m['tanggal_lahir'] ?></td>
                                <td><?= $m['jk'] ?></td>
                                <td><?= $m['agama'] ?></td>
                                <td><?= $m['gol'] ?></td>
                                <td><?= $m['kewarganegaraan'] ?></td>
                                <td><?= $m['alamat'] ?></td>
                                <td><?= $m['rt/rw'] ?></td>
                                <td><?= $m['desa'] ?></td>
                                <td><?= $m['kecamatan'] ?></td>
                                <td><?= $m['kabupaten'] ?></td>
                                <td><?= $m['pendidikan_terakhir'] ?></td>
                                <td><?= $m['status'] ?></td>
                                <td><?= $m['pekerjaan'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>admin/edit_penduduk/<?= $m['nik'] ?>" class="badge badge-success"><i class="fa fa-edit"> Ubah</i></a>
                                    <a href="<?= base_url() ?>admin/hapus_penduduk/<?= $m['nik'] ?>" class="badge  badge-danger" onclick=" return confirm('Apakah Anda Yakin?')"><i class="fa fa-trash-alt"> Hapus</i></a>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->