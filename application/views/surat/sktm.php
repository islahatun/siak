<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnama" hidden name="id_pengguna">
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="jk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="ttl">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" nama="pekerjaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alasan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="agama">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-fluid text-right">
                    <button class="btn btn-dark mb-5">Kirim</button>
                </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->