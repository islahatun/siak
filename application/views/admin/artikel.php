<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <?= $this->session->flashdata('message');
                ?>
            </div>
        </div>
        <?= form_open_multipart('admin/artikel'); ?>
        <div class="form-group row">
            <div class="col">
                <input type="text" class="form-control" id="staticEmail" name="id" value="<?= $pengguna['nama'] ?>" readonly hidden>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <div class="col-6">
                        <input type="text" class="form-control" id="staticEmail" name="judul" placeholder="Masukkan Judul">
                        <?= form_error('judul', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <div class="col">
                <textarea class="ckeditor" id="ckeditor" rows="6" name="isi"></textarea>
                <?= form_error('isi', '<small class="text-danger pl-3">', ' </small>') ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <div class="col">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" name="foto" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-dark" onclick=" return confirm('Apakah Anda Yakin Utuk Publish? Data tidak dapat diubah jika sudah di publish ')">Publish</button>
        </div>
        </form>
        <div class="mt-4">
            <table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($artikel as $a) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $a['judul']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>admin/hapus_artikel/<?= $a['id'] ?>" class="badge  badge-danger" onclick=" return confirm('Apakah Anda Yakin?')"><i class="fa fa-trash-alt"> Hapus</i></a>
                                </td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </table>
        </div>

    </div>
</div>
</div>