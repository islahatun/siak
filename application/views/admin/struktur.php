<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('admin/desa') ?>" method="post">
                <?= $this->session->flashdata('message') ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Lurah</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" value="<?= $struktur['lurah'] ?>" name="lurah">
                                <?= form_error('lurah', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Sekretaris</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $struktur['sekretaris'] ?>" name="sekretaris">
                                <?= form_error('sekretaris', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Bendahara</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $struktur['bendahara'] ?>" name="bendahara">
                                <?= form_error('bendahara', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kasi Pelayanan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" value="<?= $struktur['kasi_pelayanan'] ?>" name="kasi_pelayanan">
                                <?= form_error('kasi_pelayanan', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kasi Kemerintahan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kasi_pemerintahan" value="<?= $struktur['kasi_pemerintahan'] ?>">
                                <?= form_error('kasi_pemerintahan', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kasi Pemberdayaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kasi_pemberdayaan" value="<?= $struktur['kasi_pemberdayaan'] ?>">
                                <?= form_error('kasi_pemberdayaan', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kaur Perencanaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kaur_perencanaan" value="<?= $struktur['kaur_perencanaan'] ?>">
                                <?= form_error('kaur_perencanaan', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kaur Keuangan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kaur_keuangan" value="<?= $struktur['kaur_keuangan'] ?>">
                                <?= form_error('kaur_keuangan', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kaur Umum</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kaur_umum" value="<?= $struktur['kaur_umum'] ?>">
                                <?= form_error('kaur_umum', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kadus 1</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kadus1" value="<?= $struktur['kadus1'] ?>">
                                <?= form_error('kadus1', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kadus 2</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kadus2" value="<?= $struktur['kadus2'] ?>">
                                <?= form_error('kadus2', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">VISI</label></label>
                            <div class="col-sm-12">
                                <textarea class="ckeditor" id="ckeditor" name="visi" value=""><?= $struktur['visi'] ?></textarea>
                                <?= form_error('visi', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="inputnik" class="col-sm-4 col-form-label">MISI</label></label>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea class="ckeditor" id="ckeditor" name="misi" value=""><?= $struktur['misi'] ?></textarea>
                                <?= form_error('misi', '<small class="text-danger pl-4">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container-fluid text-right">
            <div class="form-group row">
                <label for="inputnik" class="col-sm-4 col-form-label"></label>
                <div class="col-sm-7">
                    <button class="btn btn-dark mb-5" type="submit">Simpan</button>
                </div>
            </div>
        </div>
        </form>

    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->