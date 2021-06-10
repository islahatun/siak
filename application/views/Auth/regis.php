<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">REGISTRASI</h1>
                                <?= $this->session->flashdata('message') ?>
                            </div>
                            <form class="user" acrion="<?= base_url('auth/regis') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan No NIK... " name="nik">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap... " name="nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="sandi">
                                    <?= form_error('sandi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password" name="sandi2">
                                    <?= form_error('sandi2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Registrasi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>